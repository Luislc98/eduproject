<?php
// DO NOT REMOVE!
include("includes/init.php");
// DO NOT REMOVE!

$messages = array();
// Insert Form
// Get the list of emails from the database.
$emailcheck = exec_sql_query($db, "SELECT DISTINCT email FROM users", NULL)->fetchAll(PDO::FETCH_COLUMN);


if ( isset($_POST["signup"]) ) {
  $valid_signup = TRUE;
  $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
  $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
  $pass_word = filter_input(INPUT_POST, 'pass_word', FILTER_SANITIZE_STRING);
 // create a hashed version of password in order to protect security of database
  $hashed_password = password_hash($pass_word, PASSWORD_DEFAULT);
  
  // check and see if email is already in database of users
  if ( in_array($email, $emailcheck) ) {
    $valid_signup = FALSE;
  }
  // 
  if ($valid_signup) {
    $sql = "INSERT INTO users (firstname, lastname, email, username,pword) VALUES (:firstname, :lastname, :email, :username, :pass_word)";
    $params = array(
      ':firstname' => $firstname,
      ':lastname' => $lastname,
      ':email' => $email,
      ':username' => $username,
      ':pass_word' => $hashed_password
    );
    $result = exec_sql_query($db, $sql, $params);
    if ($result) {
      array_push($messages, "You have been successfully signed up. Thank you!");
    } else {
      array_push($messages, "Failed to Sign Up.");
    }
  } else {
    array_push($messages, "Failed to sign up. Invalid parameters were added.");
  }
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Educational </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">

</head>

<body>

<section class="hero is-info is-medium is-fullheight">

<?php

include("includes/header.php");

 ?>



<h1 class="subtitle has-text-centered is-size-4" > Create an Account and take your next step towards bettering your future.
</h1>


<form id="signupForm" action="signup.php" method="post">
          <ul>
            <li>
              <label for="firstname"> First Name :</label>
              <input id="firstname" type="text" name="firstname" />
            </li>
            <li>
              <label for="lastname"> Last Name :</label>
              <input id="lastname" type="text" name="lastname" />
            </li>
            <li>
              <label for="email"> Email :</label>
              <input id="email" type="text" name="email" />
            </li>
            <li>
              <label for="username">Username:</label>
              <input id="username" type="text" name="username" />
            </li>
            <li>
              <label for="pass_word">Password:</label>
              <input id="password" type="password" name="pass_word" />
            </li>
            <li>
              <button name="signup" type="submit">Sign Up</button>

            </li>
          </ul>
        </form>

        <?php
    // Write out any messages to the user.
    foreach ($messages as $message) {
      echo "<p><strong>" . htmlspecialchars($message) . "</strong></p>\n";
    }
    ?>






<?php include("includes/footer.php"); ?>



</section>
</body>




</html>