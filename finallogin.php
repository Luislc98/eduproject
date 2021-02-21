<?php
// DO NOT REMOVE!
include("includes/init.php");
// DO NOT REMOVE!



$login_messages = array();


if(!empty($_POST["remember_me_student"])) {
	setcookie ("student_loginusername",$_POST["student_loginusername"],time()+ 3600);
	setcookie ("student_loginpassword",$_POST["student_loginpassword"],time()+ 3600);
	//echo "Cookies Set Successfuly";
} else {
	setcookie("student_loginusername","");
	setcookie("student_loginpassword","");
	//echo "Cookies Not Set";
}

if(!empty($_POST["remember_me_teacher"])) {
	setcookie ("teacher_login_username",$_POST["teacher_login_username"],time()+ 3600);
	setcookie ("teacher_login_password",$_POST["teacher_login_password"],time()+ 3600);
	echo "Cookies Set Successfuly";
} else {
	setcookie("teacher_login_username","");
	setcookie("teacher_login_password","");
	//echo "Cookies Not Set";
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

<link rel="stylesheet" href="styles/login_styles.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  
  
  <?php
  foreach ($session_messages as $message) {
    echo "<p><strong>" . htmlspecialchars($message) . "</strong></p>\n";
   }
  
  
  //if ( is_student_logged_in() ) {
  
  
  
  ?>
  
  <?php
  //}
  
 // else
 // {
  
  ?>




  <div class="d-flex flex-column align-items-center justify-content-center" id="form-spacing">
    <h2>I am logging in as a</h2>
<!-- These buttons toggle between the student sign-up and the teacher sign-up -->
    <div class="login-btns d-flex">
      <button id="student-login-btn" type="button" class="btn btn-primary flex-fill col-6" data-bs-toggle= "collapse" aria-expanded="true">
        <span>Student</span>
      </button>
            
      <button id="teacher-login-btn" type="button" class="btn btn-primary flex-fill col-6" data-bs-toggle= "collapse" aria-expanded="true">
        <span>Teacher</span>
      </button>
    </div>
<!--This is the studentlogin form-->
    <form id="student-login-form" class="collapse" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post">
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="inputUsername">Username or E-mail</label>
          <input type="text" class="form-control" id="inputUsername" name='student_loginusername' value="<?php if(isset($_COOKIE["student_loginusername"])) { echo $_COOKIE["student_loginusername"]; } ?>"  required>
        </div>
            
        <div class="form-group col-md-12">
          <label for="inputPassword">Password</label>
          <input type="password" class="form-control" id="inputPassword" name='student_loginpassword' value="<?php if(isset($_COOKIE["student_loginpassword"])) { echo $_COOKIE["student_loginpassword"]; } ?>" required>
        </div>
      </div>

      <div class="form-group">
        
        <input type="checkbox" onclick="myFunction()"> Show Password
      </div>
      <div class="form-group">
        <input type="checkbox"  id="rememberMe" name="remember_me_student">
        <label for="rememberMe">Remember me next time</label>
      </div>    
          <button type="submit" name="student_login" class="btn btn-primary">Login</button>
    </form>
<!--This is the teacher login form-->
    <form id="teacher-login-form" class="collapse">
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="inputUsername">Username or E-mail</label>
          <input type="text" class="form-control" id="inputUsername"  name='teacher_login_username' value="<?php if(isset($_COOKIE["teacher_login_username"])) { echo $_COOKIE["teacher_login_username"]; } ?>" required>
        </div>
            
        <div class="form-group col-md-12">
          <label for="inputPassword">Password</label>
          <input type="password" class="form-control" id="inputTeacherPassword" name='teacher_login_password' value="<?php if(isset($_COOKIE["teacher_login_password"])) { echo $_COOKIE["teacher_login_password"]; } ?>" required>
        </div>
      </div>
      
      <div class="form-group">
      <input type="checkbox" onclick="myFunctionteacher()"> 
        <label for="showPassword">Show password</label>
      </div>
      <div class="form-group">
        <input type="checkbox"  id="rememberMe" name="remember_me_teacher">
        <label for="rememberMe">Remember me next time</label>
      </div>    
          <button type="submit" name="teacher_login" class="btn btn-primary">Login</button>
    </form>

  </div>

  <?php

//}





?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src ="script/login_script.js"></script>
</body>

</html>