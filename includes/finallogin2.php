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

<div id="fixed-container-signin" class="hidden">
      <div id="signin-dark-background"></div> 
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
</div>
  <?php

//}





?>
