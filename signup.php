
<?php
// DO NOT REMOVE!
include("includes/init.php");
// DO NOT REMOVE!

$messages = array();
// Insert Form
// Get the list of emails from the database.
$emailcheck = exec_sql_query($db, "SELECT DISTINCT email FROM users", NULL)->fetchAll(PDO::FETCH_COLUMN);
$teacher_emailcheck = exec_sql_query($db, "SELECT DISTINCT email FROM teachers", NULL)->fetchAll(PDO::FETCH_COLUMN);


if ( isset($_POST["student-signup"]) ) {
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
 // create a hashed version of password in order to protect security of database
  $hashed_password = password_hash($pass_word, PASSWORD_DEFAULT);
  
  // check and see if email is already in database of users
  if ( in_array($email, $emailcheck) ) {
    $valid_signup = FALSE;
  }
  // 
  if ($valid_signup) {
    $sql = "INSERT INTO users (firstname, lastname, email, username,pword,edulevel,dob,homeaddress,homeaddress2,addresscity,addressstate,addresszip)
     VALUES (:firstname, :lastname, :email, :username, :pass_word, :edulevel, :dob , :homeaddress, :homeaddress2, :addresscity, :addressstate, :addresszip)";
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



if ( isset($_POST["teacher_signup"]) ) {
  $valid_teacher_signup = TRUE;
  $firstname = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING);
  $lastname = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING);
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
  $pass_word = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
  $teacher_education_level = filter_input(INPUT_POST, 'teacher_education_level', FILTER_SANITIZE_STRING);
  $subject_area = filter_input(INPUT_POST, 'subject_area', FILTER_SANITIZE_STRING);
  $is_teacher = filter_input(INPUT_POST, 'is_teacher', FILTER_SANITIZE_STRING);
  $institution_name = filter_input(INPUT_POST, 'institution_name', FILTER_SANITIZE_STRING);
  $teaching_exp = filter_input(INPUT_POST, 'teaching_exp', FILTER_SANITIZE_NUMBER_FLOAT );
  // grab the info from the uploaded resume in the teacher form 
  $teacher_resume_upload_info = $_FILES["assignment_file"];
 
 // create a hashed version of password in order to protect security of database
  $hashed_password = password_hash($pass_word, PASSWORD_DEFAULT);
  
  // check and see if email is already in database of users
  if ( in_array($email, $teacher_emailcheck) ) {
    $valid_teacher_signup = FALSE;
  }
  // 
  if ($valid_signup && $teacher_resume_upload_info['error'] == UPLOAD_ERR_OK) {
    // check if file uploaded correctly
    // call file name
    $teacher_resume_upload_name = basename($teacher_resume_upload_info["name"]);
    // call file extension
    $teacher_resume_upload_ext = strtolower( pathinfo($teacher_resume_upload_name, PATHINFO_EXTENSION) );

    $sql = "INSERT INTO users (firstname, lastname, email, username,pword,subjectarea,isteacher
    ,institutionname,teachingexp,edulevel,resume_file_name,resume_file_ext) VALUES
     (:firstname, :lastname, :email, :username, :pass_word, :edulevel,:subject_area, :is_teacher, :institution_name
     ,:teachingexp,:resume_file_name,:resume_file_ext )";
    $teacherparams = array(
      ':firstname' => $firstname,
      ':lastname' => $lastname,
      ':email' => $email,
      ':username' => $username,
      ':pass_word' => $hashed_password,
      ':edulevel' => $teacher_education_level,
      ':subject_area' => $subject_area,
      ':is_teacher' => $is_teacher,
      ':institution_name' => $institution_name,
      ':teachingexp' => $teaching_exp,
      ':resume_file_name' => $resume_file_name,
      ':resume_file_ext' => $resume_file_ext
      
    );
    $result = exec_sql_query($db, $sql, $teacherparams);
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




<!DOCTYPE html>
<html lang="en">
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

<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="d-flex align-items-center" id="form-spacing">
    <div src="" id="login-image" class="login-image">
      </div>

    <form id="student-signup-form" class="collapse.show" action="signup.php" method="post">
      <div class="form-col">
        <label for="Name">Name</label>

          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" class="form-control" id="education" name="first_name" placeholder="First Name" required>
            </div>
      
            <div class="form-group col-md-6">
              <input type="text" class="form-control" id="lastName" name="last_name" placeholder="Last Name" required>
            </div>
          </div>

      </div>
      <div class="form-group">
        <label for="inputEmail4">Email</label>
        <input name='email' type="email" class="form-control" id="inputEmail4" required>
      </div>
      
      <div class="form-row">
      
        <div class="form-group col-md-12">
          <label for="inputUsername">Username</label>
          <input name='username' type="text" class="form-control" id="inputUsername" required>
        </div>
            
        <div class="form-group col-md-12">
          <label for="inputPassword4">Password</label>
          <input name='password' type="password" class="form-control" id="inputPassword4" required>
        </div>
      
      </div>

          <div class="form-group">
            <label for="inputAddress">Address</label>
            <input name='homeaddress' type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
          </div>

          <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input name='homeaddress2' type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
          </div>
          
          <div class="form-row">
            
            <div class="form-group col-md-6">
              <label for="DOB">Date of Birth</label>
              <input type="date" id="DOB" name="DOB" class= "form-control" required>
            </div>

            <div class="form-group col-md-6">
              <label for="Education">Highest Education Level</label>
              <select name='education_level' id="education"  class= "form-control" required>
                <option>High School</option>
                <option>Some College </option>
                <option> Bachelors </option>
                <option>Masters</option>
                <option>Doctorate</option>
                
              </select>
            </div>

          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">City</label>
              <input type="text" name='addresscity' class="form-control" id="inputCity" required>
            </div>

            <div class="form-group col-md-4">
              <label for="inputState">State</label>
              <select name='addressstate' id="inputState" class="form-control" required>
                  <option selected>Choose...</option>
                
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

            <div class="form-group col-md-2">
              <label for="inputZip">Zip</label>
              <input name='addresszip' type="text" class="form-control" id="inputZip" required>
            </div>

          </div>

          

          <button type="submit" class="btn btn-primary" name="student-signup">Sign up</button>
    
      </form>  
      <?php
      // Write out any messages to the user.
      foreach ($messages as $message) {
        echo "<p><strong>" . htmlspecialchars($message) . "</strong></p>\n";
      }
      ?>
      <form id="teacher-signup-form" class="collapse" action="signup.php" method="post">
        <div class="form-col">
          <label for="Name">Name</label>
  
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" id="education" name="first_name" placeholder="First Name" required>
              </div>
        
              <div class="form-group col-md-6">
                <input type="text" class="form-control" id="lastName" name="last_name" placeholder="Last Name" required>
              </div>
            </div>
  
        </div>
        <div class="form-group">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" id="inputEmail4" required>
        </div>
        
        <div class="form-row">
        
          <div class="form-group col-md-12">
            <label for="inputUsername">Username</label>
            <input type="password" class="form-control" id="inputUsername" required>
          </div>
              
          <div class="form-group col-md-12">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" required>
          </div>
        
        </div>
  
            <div class="form-group">
              <label for="inputAddress">Address</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
            </div>
  
            <div class="form-group">
              <label for="inputAddress2">Address 2</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            
            <div class="form-row">
              
              <div class="form-group col-md-6">
                <label for="DOB">Date of Birth</label>
                <input type="date" id="DOB" name="DOB" class= "form-control" required>
              </div>
  
              <div class="form-group col-md-6">
                <label for="Education">Highest Education Level</label>
                <select id="education" name="education_level" class= "form-control" required>
                  <option>High School</option>
                  <option>Some College</option>
                  <option>Bachelors</option>
                  <option>Masters</option>
                  <option>Doctorate</option>
                  
                </select>
              </div>
  
            </div>
  
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity" required>
              </div>
  
              <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control" required>
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
              </div>
  
              <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip" required>
              </div>
  
            </div>
  
            <div class="form-group">
              <label for="exampleFormControlFile1">Upload an Image for your profile!</label>
              <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
  
            <button type="submit" class="btn btn-primary" name='teacher-signup'>Sign up</button>
      
        </form>

        <?php
        // Write out any messages to the user.
        foreach ($messages as $message) {
          echo "<p><strong>" . htmlspecialchars($message) . "</strong></p>\n";
        }
        ?>
      
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>
    $('#student-signup-btn').on('click',function() {
      $("#student-signup-form").addClass("collapse.show");
      $("#student-signup-form").removeClass("collapse");
      $("#teacher-signup-form").removeClass("collapse.show");
      $("#teacher-signup-form").addClass("collapse")
    });

    $('#teacher-signup-btn').on('click',function() {
      $("#teacher-signup-form").addClass("collapse.show");
      $("#teacher-signup-form").removeClass("collapse");
      $("#student-signup-form").removeClass("collapse.show");
      $("#student-signup-form").addClass("collapse")
    });
  </script>
</body>

</html>