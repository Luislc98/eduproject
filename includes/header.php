<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a href="index.php" class="navbar-item">
        Home
      </a>

      <a href="about.php" class="navbar-item">
        About Us
      </a>

      <a href="contact.php" class="navbar-item">
        Contact Us
      </a>

      <a href="team.php" class="navbar-item">
        Our Team
      </a>
      
      <a href="browse.php" class="navbar-item">
        Browse Courses
      </a>
      <?php
      if (! is_user_logged_in()) {
      ?>
      <a href="teacherlogin.php" class="navbar-item">
        Teacher Login
      </a>
      <?php } 
      ?>

     

  <?php 
  if ( is_student_logged_in() ) {

  ?>
  <div class="navbar-item has-dropdown is-hoverable  ">
    <a class="navbar-link">
      Students
    </a>

    <div class="navbar-dropdown is-info">
      <a href='addcourse.php' class="navbar-item">
        Add a Course
      </a>
      <a href= 'currentcourses.php' class="navbar-item">
        Current Courses
      </a>
      <a class="navbar-item">
        Account settings
      </a>
    </div>
  </div>    
  <?php
  }
  ?>

<?php 
  if ( is_teacher_logged_in() ) {

  ?>
  <div class="navbar-item has-dropdown is-hoverable  ">
    <a class="navbar-link">
      Teachers
    </a>

    <div class="navbar-dropdown is-info">
      <a href= 'teacher_manage_courses.php' class="navbar-item">
        Manage Courses
      </a>
      <a class="navbar-item">
        Account settings
      </a>
    </div>
  </div>    
  <?php
  }
  ?>

      
      
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
        <?php if ( is_user_logged_in() ) {
        // Add a logout query string parameter
        $logout_url = htmlspecialchars( $_SERVER['PHP_SELF'] ) . '?' . http_build_query( array( 'logout' => '' ) );
        echo '<a class="button is-info" href="' . $logout_url . '">Sign Out ' . htmlspecialchars($current_user['firstname']) . '</a> ';
        //echo '<li > <a id="logout" href="' . $logout_url . '">Sign Out ' . htmlspecialchars($current_user['username']) . '</a> </li>';
        
        ?>

        <?php 
        }  else {
        ?>
          <a href="signup.php" class="button is-info">
            <strong>Sign up</strong>
          </a>
          <a href="login.php" class="button is-light">
            Log in
          </a>
        <?php
          }
        ?>
        </div>
      </div>
    </div>
  </div>
</nav>
