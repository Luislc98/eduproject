<div id="fixed-container-signin" class="hidden">
      <div id="signin-dark-background"></div> 
  <div class="signin-container student-css">
    <h2 style="text-align: center;">Login as a</h2>
    <br>
      <!-- These buttons toggle between the student sign-up and the teacher sign-up -->
    <div class="d-flex login-btns">
      <button id="student-login-btn" type="button" class="btn flex-fill col-6 student-default" data-bs-toggle= "collapse" aria-expanded="true" data-bs-target="#login-options-Student">
        <span>Student</span>
      </button>
            
      <button id="teacher-login-btn" type="button" class="btn flex-fill col-6 teacher-default" data-bs-toggle= "collapse" aria-expanded="true" data-bs-target="#login-options-Teacher">
        <span>Teacher</span>
      </button>
    </div>
    <!-- Google, Facebook, and email signup option -->
    <div id="login-options-Student" class= "collapse login-options">
      
      <button id="customBtnStudent" class="customBtn customGPlusSignIn d-flex justify-content-center">
        <span class="google-icon"></span>
        <span class="google-text">Login with Google</span>
      </button>

      <button id ="fb-btn-Student" class="fb-btn d-flex justify-content-center">
        <span class="facebook-icon" style="font-size: 1.1rem"><i class="fa fa-facebook" aria-hidden="true"></i></span>
        <span class="facebook-text">Login with Facebook</span>
      </button>

      <button id="email-btn-Student" class="email-btn d-flex justify-content-center" type="button" data-bs-toggle= "collapse" data-bs-target="#student-login-form" aria-expanded="false">
        <span class="email-text">Login with email</span>
      </button>
    </div>

    <div id="login-options-Teacher" class= "collapse login-options ">
      
      <button id="customBtnTeacher" class="customBtn customGPlusSignIn d-flex justify-content-center">
        <span class="google-icon"></span>
        <span class="google-text">Login with Google</span>
      </button>

      <button id ="fb-btn-Teacher" class="fb-btn d-flex justify-content-center">
        <span class="facebook-icon"><i class="fa fa-facebook" aria-hidden="true"></i></span>
        <span class="facebook-text">Login with Facebook</span>
      </button>
      <button id="email-btn-Teacher" class="email-btn d-flex justify-content-center" type="button" data-bs-toggle= "collapse" data-bs-target="#teacher-login-form" aria-expanded="false">
        <span class="email-text">Login with email</span>
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