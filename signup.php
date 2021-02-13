<?php
// DO NOT REMOVE!
include("includes/init.php");
// DO NOT REMOVE!

$messages = array();
// Insert Form
// Get the list of emails from the database.
$emailcheck = exec_sql_query($db, "SELECT DISTINCT email FROM users", NULL)->fetchAll(PDO::FETCH_COLUMN);
$teacher_emailcheck = exec_sql_query($db, "SELECT DISTINCT email FROM teachers", NULL)->fetchAll(PDO::FETCH_COLUMN);


if ( isset($_POST["student_signup"]) ) {
  $valid_signup = TRUE;
  $firstname = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING);
  $lastname = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING);
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
  $pass_word = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
  $edu_level = filter_input(INPUT_POST, 'education_level', FILTER_SANITIZE_STRING);
  $dob = filter_input(INPUT_POST, 'DOB', FILTER_SANITIZE_STRING);
  $home_address = filter_input(INPUT_POST, 'homeaddress', FILTER_SANITIZE_STRING);
  $home_address2 = filter_input(INPUT_POST, 'homeaddress2', FILTER_SANITIZE_STRING);
  $address_city = filter_input(INPUT_POST, 'addresscity', FILTER_SANITIZE_STRING);
  $address_state = filter_input(INPUT_POST, 'addressstate', FILTER_SANITIZE_STRING);
  $address_zip = filter_input(INPUT_POST, 'addresszip', FILTER_SANITIZE_STRING);
  $progress_updates = filter_input(INPUT_POST, 'progressUpdates', FILTER_SANITIZE_STRING);
  $newsletter_updates = filter_input(INPUT_POST, 'newsletterUpdates', FILTER_SANITIZE_STRING);
 // create a hashed version of password in order to protect security of database
  $hashed_password = password_hash($pass_word, PASSWORD_DEFAULT);
  
  // check and see if email is already in database of users
  if ( in_array($email, $emailcheck) ) {
    $valid_signup = FALSE;
  }
  // 
  if ($valid_signup) {
    $sql = "INSERT INTO users (firstname, lastname, email, username,pword,edulevel,dob,homeaddress,homeaddress2,addresscity,addressstate,addresszip,progressupdate,newsletterupdate)
     VALUES (:firstname, :lastname, :email, :username, :pass_word, :edulevel, :dob , :homeaddress, :homeaddress2, :addresscity, :addressstate, :addresszip,:progressupdate,:newsletterupdate)";
    $params = array(
      ':firstname' => $firstname,
      ':lastname' => $lastname,
      ':email' => $email,
      ':username' => $username,
      ':pass_word' => $hashed_password,
      ':edulevel' => $edu_level,
      ':dob' => $dob,
      ':homeaddress' => $home_address,
      ':homeaddress2' => $home_address2,
      ':addresscity' => $address_city,
      ':addressstate' => $address_state,
      ':addresszip' => $address_zip,
      ':progressupdate' =>  $progress_updates,
      ':newsletterupdate' => $newsletter_updates
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

// Set maximum file size for uploaded files.
// MAX_FILE_SIZE must be set to bytes
// 1 MB = 1000000 bytes
const MAX_FILE_SIZE = 10000000;

if ( isset($_POST["teacher_signup"]) ) {
  $valid_teacher_signup = TRUE;
  $teacher_firstname = filter_input(INPUT_POST, 'teacher_first_name', FILTER_SANITIZE_STRING);
  $teacher_lastname = filter_input(INPUT_POST, 'teacher_last_name', FILTER_SANITIZE_STRING);
  $teacher_email = filter_input(INPUT_POST, 'teacher_email', FILTER_VALIDATE_EMAIL);
  $teacher_username = filter_input(INPUT_POST, 'teacher_username', FILTER_SANITIZE_STRING);
  $teacher_pass_word = filter_input(INPUT_POST, 'teacher_password', FILTER_SANITIZE_STRING);
  $teacher_education_level = filter_input(INPUT_POST, 'teacher_education_level', FILTER_SANITIZE_STRING);
  $subject_area = filter_input(INPUT_POST, 'subject_area', FILTER_SANITIZE_STRING);
  $teacher_home_address = filter_input(INPUT_POST, 'teacher_homeaddress', FILTER_SANITIZE_STRING);
  $teacher_home_address2 = filter_input(INPUT_POST, 'teacher_homeaddress2', FILTER_SANITIZE_STRING);
  $teacher_address_city = filter_input(INPUT_POST, 'teacher_addresscity', FILTER_SANITIZE_STRING);
  $teacher_address_state = filter_input(INPUT_POST, 'teacher_addressstate', FILTER_SANITIZE_STRING);
  $teacher_address_zip = filter_input(INPUT_POST, 'teacher_addresszip', FILTER_SANITIZE_STRING);
  $teacher_dob = filter_input(INPUT_POST, 'teacher_DOB', FILTER_SANITIZE_STRING);
  $teacher_edu_level = filter_input(INPUT_POST, 'teacher_education_level', FILTER_SANITIZE_STRING);
  
  $institution_name = filter_input(INPUT_POST, 'institution_name', FILTER_SANITIZE_STRING);
  $teaching_exp = filter_input(INPUT_POST, 'teaching_exp', FILTER_SANITIZE_NUMBER_FLOAT );
  // grab the info from the uploaded resume in the teacher form 
  $teacher_resume_upload_info = $_FILES["teacher_resume"];
 
 // create a hashed version of password in order to protect security of database
  $teacher_hashed_password = password_hash($pass_word, PASSWORD_DEFAULT);
  
  // check and see if email is already in database of users
  if ( in_array($teacher_email, $teacher_emailcheck) ) {
    $valid_teacher_signup = FALSE;
  }
  // 
  if ($valid_teacher_signup && $teacher_resume_upload_info['error'] == UPLOAD_ERR_OK) {
    // check if file uploaded correctly
    // call file name
    $teacher_resume_upload_name = basename($teacher_resume_upload_info["name"]);
    // call file extension
    $teacher_resume_upload_ext = strtolower( pathinfo($teacher_resume_upload_name, PATHINFO_EXTENSION) );

    $teacher_sql = "INSERT INTO teachers (firstname, lastname, email, username,pword,subjectarea
    ,institutionname,teachingexp,edulevel,homeaddress,homeaddress2, addresscity, addressstate, addresszip,resume_file_name,resume_file_ext) VALUES
     (:firstname, :lastname, :email, :username, :pass_word, :subject_area,:institution_name,:teachingexp, :edulevel,:homeaddress, :homeaddress2,
     :addresscity,:addressstate,:addresszip,:resume_file_name,:resume_file_ext )";
    $teacherparams = array(
      ':firstname' => $teacher_firstname,
      ':lastname' => $teacher_lastname,
      ':email' => $teacher_email,
      ':username' => $teacher_username,
      ':pass_word' => $teacher_hashed_password,
      ':edulevel' => $teacher_education_level,
      ':subject_area' => $subject_area,
      ':homeaddress' => $teacher_home_address,
      ':homeaddress2' => $teacher_home_address2,
      ':addresscity' => $teacher_address_city,
      ':addressstate' => $teacher_address_state,
      ':addresszip' => $teacher_address_zip,
      ':institution_name' => $institution_name,
      ':teachingexp' => $teaching_exp,
      ':resume_file_name' => $teacher_resume_upload_name,
      ':resume_file_ext' => $teacher_resume_upload_ext
      
    );
    $result = exec_sql_query($db, $teacher_sql, $teacherparams);
    if ($result) {
      //move file to directory
      $file_id = $db->lastInsertId("id");
      $id_filename = 'uploads/teacher_resumes/' . $file_id . '.' . $teacher_resume_upload_ext;
      if ( move_uploaded_file($teacher_resume_upload_info["tmp_name"], $id_filename ) ) {
        // Successfully moved the tmp uploaded file to the uploads directory.
        array_push($messages, "Successfully signed up.");
        $upload_submitted = True;
      }
    } else {
      array_push($messages, "Failed to Sign Up.");
    }
  } else {
    array_push($messages, "Failed to sign up. Invalid parameters were added.");
  }
}

?>




<html>
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="styles/signup_form_styles.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="d-flex" id="form-spacing">
    <div id="signup-image" class="signup-image"></div>
    <div class="d-flex flex-column sign-up-forms justify-content-center flex-fill">
      <div id="form-header" class="d-flex flex-column align-items-center teacher-background">
        <h2>Sign up as a...</h2>
<!-- These buttons toggle between the student sign-up and the teacher sign-up -->
        <div class="signup-btns d-flex">
          <button id="student-signup-btn" type="button" class="btn flex-fill col-6 default-color" data-bs-toggle= "collapse" aria-expanded="true">
            <span>Student</span>
          </button>
        
          <button id="teacher-signup-btn" type="button" class="btn flex-fill col-6 default-color" data-bs-toggle= "collapse" aria-expanded="true">
            <span>Teacher</span>
          </button>
        </div>
      </div>
<!-- Student signup form-->
      <form id="student-signup-form" class="collapse" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post">

        <div class="form-col collapse firstPage">
          <label for="Name">Name</label> 
          <div class="form-row">
            <div class="form-group col-6">
              <input type="text" class="form-control" id="firstName" name="first_name" placeholder="First Name" required>
            </div>
        
            <div class="form-group col-6">
              <input type="text" class="form-control" id="lastName" name="last_name" placeholder="Last Name" required>
            </div>
          </div>
        </div>

        <div class="form-group collapse firstPage">
          <label for="inputEmail">Email</label>
          <input type="email" name='email' class="form-control" id="inputEmail" required>
        </div>
        
        <div class="form-row collapse secondPage">
          <div class="form-group col-12">
            <label for="inputUserName">Username</label>
            <input type="text" name='username' class="form-control" id="inputUserName" required>
          </div>
              
          <div class="form-group col-12">
            <label for="inputPassword">Password</label>
            <input type="password" name='password' class="form-control" id="inputPassword" required>
          </div>
        </div>

        <div class="form-group collapse thirdPage">
          <label for="inputAddress">Address</label>
          <input type="text" name='homeaddress' class="form-control" id="inputAddress" placeholder="1234 Main St" required>
        </div>
            
        <div class="form-group collapse thirdPage">
          <label for="inputAddress2">Address 2</label>
          <input type="text" name='homeaddress2' class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>

        <div class="form-col collapse thirdPage">
          <div class="form-group">
            <label for="inputCity">City</label>
            <input type="text" name='addresscity'  class="form-control" id="inputCity" required>
          </div>
      
          <div class="form-row">
            <div class="form-group col-6">
              <label for="inputState">State</label>
              <select id="inputState" name='addressstate' class="form-control" required>
                <option selected value="" >Choose...</option>
                <option value="AL">Alabama (AL)</option>
                <option value="AK">Alaska (AK)</option>
                <option value="AZ">Arizona (AZ)</option>
                <option value="AR">Arkansas (AR)</option>
                <option value="CA">California (CA)</option>
                <option value="CO">Colorado (CO)</option>
                <option value="CT">Connecticut (CT)</option>
                <option value="DE">Delaware (DE)</option>
                <option value="DC">District Of Columbia (DC)</option>
                <option value="FL">Florida (FL)</option>
                <option value="GA">Georgia (GA)</option>
                <option value="HI">Hawaii (HI)</option>
                <option value="ID">Idaho (ID)</option>
                <option value="IL">Illinois (IL)</option>
                <option value="IN">Indiana (IN)</option>
                <option value="IA">Iowa (IA)</option>
                <option value="KS">Kansas (KS)</option>
                <option value="KY">Kentucky (KY)</option>
                <option value="LA">Louisiana (LA)</option>
                <option value="ME">Maine (ME)</option>
                <option value="MD">Maryland (MD)</option>
                <option value="MA">Massachusetts (MA)</option>
                <option value="MI">Michigan (MI)</option>
                <option value="MN">Minnesota (MN)</option>
                <option value="MS">Mississippi (MS)</option>
                <option value="MO">Missouri (MO)</option>
                <option value="MT">Montana (MT)</option>
                <option value="NE">Nebraska (NE)</option>
                <option value="NV">Nevada (NV)</option>
                <option value="NH">New Hampshire (NH)</option>
                <option value="NJ">New Jersey (NJ)</option>
                <option value="NM">New Mexico (NM)</option>
                <option value="NY">New York (NY)</option>
                <option value="NC">North Carolina (NC)</option>
                <option value="ND">North Dakota (ND)</option>
                <option value="OH">Ohio (OH)</option>
                <option value="OK">Oklahoma (OK)</option>
                <option value="OR">Oregon (OR)</option>
                <option value="PA">Pennsylvania (PA)</option>
                <option value="RI">Rhode Island (RI)</option>
                <option value="SC">South Carolina (SC)</option>
                <option value="SD">South Dakota (SD)</option>
                <option value="TN">Tennessee (TN)</option>
                <option value="TX">Texas (TX)</option>
                <option value="UT">Utah (UT)</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
                <option value="AS">American Samoa (AS)</option>
                <option value="GU">Guam (GU)</option>
                <option value="MP">Northern Mariana Islands (MP)</option>
                <option value="PR">Puerto Rico (PR)</option>
                <option value="UM">United States Minor Outlying Islands (UM)</option>
                <option value="VI">Virgin Islands (VI)</option>
                <option value="AA">Armed Forces Americas (AA)</option>
                <option value="AP">Armed Forces Pacific (AP)</option>
                <option value="AE">Armed Forces Others (AE)</option>
              </select>
            </div>
            <div class="form-group col-6">
              <label for="inputZip">Zip</label>
              <input type="number" name='addresszip' class="form-control" id="inputZip" placeholder="11201, etc"required>
            </div>
          </div>
        </div>

        <div class="collapse fourthPage">
          <div class="d-flex flex-column">  
            <div class="form-group flex-fill">
              <label for="DOB">Date of Birth</label>
              <input type="date" id="DOB" name="DOB" class= "form-control" required>
            </div>
              
            <div class="form-group flex-fill">
              <label for="Education">Highest Education Level</label>
              <select id="education" name="education_level" class= "form-control" required>
                <option value='highschool'> High School</option>
                <option value='somecollege'>Some College</option>
                <option value='associate'>Associates</option>
                <option value='bachelor'>Bachelors</option>
                <option value='masters'>Masters</option>
                <option value='doctorate'>Doctorate</option>
              </select>
            </div>
          </div>
        </div>

        <div class="form-group collapse fifthPage contact">
        <p>Would you like to receive updates about your progress?</p>
          <input name ="progressUpdates" value='text' type="radio" checked>
          <label>Yes, text message</label><br>
          <input name ="progressUpdates" value='email' type="radio">
          <label>Yes, e-mail</label><br>
          <input name ="progressUpdates" value='text and email' type="radio">
          <label>Yes, text and email</label><br>
          <input name ="progressUpdates" value='no' type="radio">
          <label>No</label><br>
        </div>

        <div class="form-group collapse sixthPage contact">
        <p>Would you like to receive updates about newletters on new features or new ways of earning?</p>
            <input name="newsletterUpdates" value='text' type="radio" checked>
            <label>Yes, text message</label><br>
            <input name="newsletterUpdates" value='email' type="radio" >
            <label>Yes, e-mail</label><br>
            <input name="newsletterUpdates" value='text and email' type="radio" >
            <label>Yes, text and email</label><br>
            <input name="newsletterUpdates" value='no' type="radio" >
            <label>No</label><br>
        </div>
<!-- These buttons allow you to navigate the form-->
        <div class="form-nav-btns d-flex justify-content-end"> 
          <button id="student-back-arrow-btn" type="button" class="btn back-arrow collapse" data-bs-toggle= "collapse" aria-expanded="false">
            <span><i class="fa fa-angle-left" aria-hidden="true"></i></span>
          </button>
          <button id="student-front-arrow-btn"type="button" class="btn front-arrow collapse" data-bs-toggle= "collapse" aria-expanded="false">
            <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
          </button>
        </div>
        

<!-- This button is to submit the form to the datebase-->
        <div class="d-flex justify-content-center">        
          <button type="submit" name='student_signup' class="btn btn-primary collapse sixthPage">Sign up</button>
        </div>
      
      </form>

<!-- Teacher signup form-->

      <form id="teacher-signup-form" class="collapse" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post" enctype="multipart/form-data">
        <div class="form-col collapse firstPage">
          <label for="Name">Name</label>
            <div class="form-row">
              <div class="form-group col-6">
                <input type="text" class="form-control" id="education" name="teacher_first_name" placeholder="First Name" required>
              </div>
        
              <div class="form-group col-6">
                <input type="text" class="form-control" id="lastName" name="teacher_last_name" placeholder="Last Name" required>
              </div>
            </div>
        </div>

        <div class="form-group collapse firstPage">
          <label for="inputEmail4">Email</label>
          <input type="text" class="form-control" name='teacher_email' id="inputEmail4" required>
        </div>

        <div class="form-row collapse secondPage">

          <div class="form-group col-12">
            <label for="inputUsername">Username</label>
            <input type="text" name='teacher_username' class="form-control" id="inputUsername" required>
          </div>
              
          <div class="form-group col-12">
            <label for="inputPassword4">Password</label>
            <input type="password" name='teacher_password' class="form-control" id="inputPassword4" required>
          </div>
        
        </div>

        <div class="form-group collapse thirdPage">
          <label for="inputSubject">What subject do you primarily want to teach?</label>
          <input type="text" name='subject_area' class="form-control" id="inputSubject" required>
        </div>

        <div class="form-group collapse thirdPage">
          <label for="inputInstitution">What institution do you teach at?</label>
          <input type="text" name='institution_name' class="form-control" id="inputInstitution" required>
        </div>

        <div class="form-group collapse thirdPage">
          <label for="inputExperience">How many years of teaching experience do you have?</label>
          <input type="number" name='teaching_exp'  class="form-control" id="inputExperience" required>
        </div>

        <div class="form-group collapse fourthPage">
          <label for="inputAddress">Address</label>
          <input type="text" name='teacher_homeaddress' class="form-control" id="inputAddress" placeholder="1234 Main St" required>
        </div>
  
        <div class="form-group collapse fourthPage">
          <label for="inputAddress2">Address 2</label>
          <input type="text" name='teacher_homeaddress2' class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>

        <div class="form-col collapse fourthPage">
        
          <div class="form-group">
            <label for="inputCity">City</label>
            <input type="text" name='teacher_addresscity' class="form-control" id="inputCity" required>
          </div>
          <div class="form-row">
            <div class="form-group col-6">
              <label for="inputState">State</label>
                <select id="inputState" name='teacher_addressstate' class="form-control" required>
                  <option value='' selected>Choose...</option>
                  <option value="AL">Alabama (AL)</option>
                  <option value="AK">Alaska (AK)</option>
                  <option value="AZ">Arizona (AZ)</option>
                  <option value="AR">Arkansas (AR)</option>
                  <option value="CA">California (CA)</option>
                  <option value="CO">Colorado (CO)</option>
                  <option value="CT">Connecticut (CT)</option>
                  <option value="DE">Delaware (DE)</option>
                  <option value="DC">District Of Columbia (DC)</option>
                  <option value="FL">Florida (FL)</option>
                  <option value="GA">Georgia (GA)</option>
                  <option value="HI">Hawaii (HI)</option>
                  <option value="ID">Idaho (ID)</option>
                  <option value="IL">Illinois (IL)</option>
                  <option value="IN">Indiana (IN)</option>
                  <option value="IA">Iowa (IA)</option>
                  <option value="KS">Kansas (KS)</option>
                  <option value="KY">Kentucky (KY)</option>
                  <option value="LA">Louisiana (LA)</option>
                  <option value="ME">Maine (ME)</option>
                  <option value="MD">Maryland (MD)</option>
                  <option value="MA">Massachusetts (MA)</option>
                  <option value="MI">Michigan (MI)</option>
                  <option value="MN">Minnesota (MN)</option>
                  <option value="MS">Mississippi (MS)</option>
                  <option value="MO">Missouri (MO)</option>
                  <option value="MT">Montana (MT)</option>
                  <option value="NE">Nebraska (NE)</option>
                  <option value="NV">Nevada (NV)</option>
                  <option value="NH">New Hampshire (NH)</option>
                  <option value="NJ">New Jersey (NJ)</option>
                  <option value="NM">New Mexico (NM)</option>
                  <option value="NY">New York (NY)</option>
                  <option value="NC">North Carolina (NC)</option>
                  <option value="ND">North Dakota (ND)</option>
                  <option value="OH">Ohio (OH)</option>
                  <option value="OK">Oklahoma (OK)</option>
                  <option value="OR">Oregon (OR)</option>
                  <option value="PA">Pennsylvania (PA)</option>
                  <option value="RI">Rhode Island (RI)</option>
                  <option value="SC">South Carolina (SC)</option>
                  <option value="SD">South Dakota (SD)</option>
                  <option value="TN">Tennessee (TN)</option>
                  <option value="TX">Texas (TX)</option>
                  <option value="UT">Utah (UT)</option>
                  <option value="VT">Vermont</option>
                  <option value="VA">Virginia</option>
                  <option value="WA">Washington</option>
                  <option value="WV">West Virginia</option>
                  <option value="WI">Wisconsin</option>
                  <option value="WY">Wyoming</option>
                  <option value="AS">American Samoa (AS)</option>
                  <option value="GU">Guam (GU)</option>
                  <option value="MP">Northern Mariana Islands (MP)</option>
                  <option value="PR">Puerto Rico (PR)</option>
                  <option value="UM">United States Minor Outlying Islands (UM)</option>
                  <option value="VI">Virgin Islands (VI)</option>
                  <option value="AA">Armed Forces Americas (AA)</option>
                  <option value="AP">Armed Forces Pacific (AP)</option>
                  <option value="AE">Armed Forces Others (AE)</option>
                </select>
            </div>
            <div class="form-group col-6">
              <label for="inputZip">Zip</label>
              <input type="number" name='teacher_addresszip' class="form-control" id="inputZip" required>
            </div>
          </div>
        </div>

        <div class="collapse fifthPage">
          <div class="d-flex flex-column">          
            <div class="form-group flex-fill">
              <label for="DOB">Date of Birth</label>
              <input type="date" id="DOB" name="teacher_DOB" class= "form-control" required>
            </div>
    
            <div class="form-group flex-fill">
              <label for="Education">Highest Education Level</label>
                <select id="education" name="teacher_education_level" class= "form-control" required>
                  <option value='highschool'> High School</option>
                  <option value='somecollege'>Some College</option>
                  <option value='associate'>Associates</option>
                  <option value='bachelor'>Bachelors</option>
                  <option value='masters'>Masters</option>
                  <option value='doctorate'>Doctorate</option>
                </select>
            </div>
          </div>
        </div>
        <div class="form-group collapse fifthPage">
          <label for="Resume">Upload an your Resume</label>
          <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_FILE_SIZE; ?>" />
          <input type="file" name='teacher_resume' class="form-control-file" id="Resume">
        </div>
        <div class="form-group collapse sixthPage contact">
          <p>Would you like to receive updates about your progress?</p>
            <input name ="progressUpdates" type="radio" checked>
            <label>Yes, text message</label><br>
            <input name ="progressUpdates" type="radio">
            <label>Yes, e-mail</label><br>
            <input name ="progressUpdates" type="radio">
            <label>Yes, text and email</label><br>
            <input name ="progressUpdates" type="radio">
            <label>No</label><br>
          </div>
  
          <div class="form-group collapse seventhPage contact">
          <p>Would you like to receive updates about newletters on new features or new ways of earning?</p>
              <input name="newsletterUpdates" type="radio" checked>
              <label>Yes, text message</label><br>
              <input name="newsletterUpdates" type="radio" >
              <label>Yes, e-mail</label><br>
              <input name="newsletterUpdates" type="radio" >
              <label>Yes, text and email</label><br>
              <input name="newsletterUpdates" type="radio" >
              <label>No</label><br>
          </div>
<!-- These buttons allow you to navigate the form-->
        <div class="form-nav-btns d-flex justify-content-end "> 
          <button id="teacher-back-arrow-btn" type="button" class="btn collapse back-arrow" data-bs-toggle= "collapse" aria-expanded="false">
            <span><i class="fa fa-angle-left" aria-hidden="true"></i></span>
          </button>
          <button id="teacher-front-arrow-btn" type="button" class="btn collapse front-arrow" data-bs-toggle= "collapse" aria-expanded="false">
            <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
          </button>
        </div>
<!-- This button is to submit the form to the datebase--> 
        <div class="d-flex justify-content-center">        
          <button type="submit" name='teacher_signup' class="btn btn-primary collapse seventhPage">Sign up</button>
        </div>
      </form> 
    </div>   
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src ="script/signup_form_script.js"></script>

</body>

</html>