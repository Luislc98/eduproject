<?php
// vvv DO NOT MODIFY/REMOVE vvv

// check current php version to ensure it meets 2300's requirements
function check_php_version()
{
  if (version_compare(phpversion(), '7.0', '<')) {
    define(VERSION_MESSAGE, "PHP version 7.0 or higher is required for 2300. Make sure you have installed PHP 7 on your computer and have set the correct PHP path in VS Code.");
    echo VERSION_MESSAGE;
    throw VERSION_MESSAGE;
  }
}
check_php_version();

function config_php_errors()
{
  ini_set('display_startup_errors', 1);
  ini_set('display_errors', 0);
  error_reporting(E_ALL);
}
config_php_errors();

// open connection to database
function open_sqlite_db($db_filename)
{
  $db = new PDO('sqlite:' . $db_filename);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $db;
}

function exec_sql_query($db, $sql, $params = array())
{
  $query = $db->prepare($sql);
  if ($query and $query->execute($params)) {
    return $query;
  }
  return null;
}


function open_or_init_sqlite_db($db_filename, $init_sql_filename)
{
  if (!file_exists($db_filename)) {
    $db = new PDO('sqlite:' . $db_filename);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (file_exists($init_sql_filename)) {
      $db_init_sql = file_get_contents($init_sql_filename);
      try {
        $result = $db->exec($db_init_sql);
        if ($result) {
          return $db;
        }
      } catch (PDOException $exception) {
        // If we had an error, then the DB did not initialize properly,
        // so let's delete it!
        unlink($db_filename);
        throw $exception;
      }
    } else {
      unlink($db_filename);
    }
  } else {
    $db = new PDO('sqlite:' . $db_filename);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
  }
  return null;
}
// open connection to database
//$db = open_sqlite_db('secure/init.sql');
$db = open_or_init_sqlite_db("secure/site.sqlite", "secure/init.sql");

// ^^^ DO NOT MODIFY/REMOVE ^^^

/* Source: lab 8 login code by Kyle Harms */
define('SESSION_COOKIE_DURATION', 60*45); //The duration of a user session will be  45minutes = 60 sec * 45min
$session_messages = array();






function log_in($username, $password) {
  global $db;
  global $current_user;
  global $session_messages;
  // check if user filled out username and password in form
  if ( (isset($password)  && isset($username))   ) {
    // use query to check if inputted username is in the users table
    $studentsql = "SELECT * FROM users WHERE username = :inputted_user;";
    $teachersql = "SELECT * FROM teachers WHERE username = :inputted_user;";
    $params = array(
      ':inputted_user' => $username
    );
    
    $studentrecords = exec_sql_query($db, $studentsql, $params)->fetchAll();
    $teacherrecords = exec_sql_query($db, $teachersql, $params)->fetchAll();
    if ($studentrecords || $teacherrecords) {
      // check if username is in database
      // Username is UNIQUE, so there should only be 1 record.
      $account=null;
      if($studentrecords){
        $account = $studentrecords[0];
        
      }
      if($teacherrecords){
        $account = $teacherrecords[0];
        ;
      }



      // Check to see if password is the hashed version of password
      if ( password_verify($password, $account['pword']) ) {
        // Generate session
        $session = session_create_id();
        
        
        // Store session ID in the sessions table
        $sql = "INSERT INTO sessions (user_id, session) VALUES (:user_id, :session);";
        $params = array(
          ':user_id' => $account['id'],
          ':session' => $session
        );
        $result = exec_sql_query($db, $sql, $params);
        if ($result) {
          // session stored correctly
          
          // Send to user.
          setcookie("session", $session, time() + SESSION_COOKIE_DURATION);

          $current_user = $account;
          array_push($session_messages, "Successfully logged in.");
          return $current_user;
        } else {
          array_push($session_messages, "Log in failed.");
        }
      } else {
        array_push($session_messages, "Invalid username or password.");
      }
    } else {
      array_push($session_messages, "Invalid username or password.");
    }
  } 
  




  else {
    array_push($session_messages, "No username or password given.");
  }
  $current_user = NULL;
  return NULL;
}





function find_user($user_id) {
  global $db;
  // query to see if inputted user id is in users table
  $usersql = "SELECT * FROM users WHERE id = :user_id;";
  $teachersql = "SELECT * FROM teachers WHERE id = :user_id;";
  $params = array(
    ':user_id' => $user_id
  );
  $userrecords = exec_sql_query($db, $usersql, $params)->fetchAll();
  $teacherrecords = exec_sql_query($db, $teachersql, $params)->fetchAll();
  if ($userrecords) {
    // because the user field  in a users table is unique, records should have only one entry
    return $userrecords[0];
  }
  if ($teacherrecords) {
    // because the user field  in a users table is unique, records should have only one entry
    return $teacherrecords[0];
  }
  return NULL;
}

function find_session($session) {
  global $db;

  if (isset($session)) {
    // search for session in session table
    $sql = "SELECT * FROM sessions WHERE session = :session;";
    $params = array(
      ':session' => $session
    );
    $records = exec_sql_query($db, $sql, $params)->fetchAll();
    if ($records) {
      // sessions are unique, so there should only be 1 record
      return $records[0];
    }
  }
  return NULL;
}



function session_login() {
  global $db;
  global $current_user;

  if (isset($_COOKIE["session"])) {             
    $session = $_COOKIE["session"];

    $session_record = find_session($session);

    if ( isset($session_record) ) {
      // the current user becomes the user who started the session
      $current_user = find_user($session_record['user_id']);

      // Restart the session for 45 more minutes
      setcookie("session", $session, time() + SESSION_COOKIE_DURATION);

      return $current_user;
    }
  }
  $current_user = NULL;
  return NULL;
}

function is_user_logged_in() {
  global $current_user;

  // check if a user is logged in by seeing if there is a current user
  return ($current_user != NULL);
}

function is_teacher_logged_in() {
  global $current_user;
  global $db;
  $sql = "SELECT * FROM teachers WHERE id = :user_id;";
  $params = array(
    ':user_id' => $current_user['id']
  );
  $records = exec_sql_query($db, $sql, $params)->fetchAll();

  // check if a user is a teacher
  if($records){
    return True;

  }
  return False;
  
}

function is_student_logged_in() {
  global $current_user;
  global $db;
  $sql = "SELECT * FROM users WHERE id = :user_id;";
  $params = array(
    ':user_id' => $current_user['id']
  );
  $records = exec_sql_query($db, $sql, $params)->fetchAll();
  array_push($session_messages, "student function failed.");
  // check if a user is a teacher
  if($records){
    return True;
    array_push($session_messages, "student function passed.");
  }
  return False;
  
}



function log_out() {
  global $current_user;

  // end the session by substracting the duration of the session
  setcookie('session', '', time() - SESSION_COOKIE_DURATION);
  $current_user = NULL;
}



// Check if we should login the user
if ( isset($_POST['student_login']) && isset($_POST['student_loginusername']) && isset($_POST['student_loginpassword']) ) {
  $student_username = trim( $_POST['student_loginusername'] );
  $student_password = trim( $_POST['student_loginpassword'] );

  log_in($student_username, $student_password);
} 
//else {
  // check if logged in already via cookie
//  session_login();
//}

elseif ( isset($_POST['teacher_login']) && isset($_POST['teacher_login_username']) && isset($_POST['teacher_login_password']) ) {
  $teacher_username = trim( $_POST['teacher_login_username'] );
  $teacher_password = trim( $_POST['teacher_login_password'] );

  log_in($teacher_username, $teacher_password);
}
 else {
  // check if logged in already via cookie
  session_login();
}



// Check if logout is needed
if ( isset($current_user) && ( isset($_GET['logout']) || isset($_POST['logout']) ) ) {
  log_out();
}





?>
