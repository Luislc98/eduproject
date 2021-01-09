<?php
// DO NOT REMOVE!
include("includes/init.php");
// DO NOT REMOVE!



$loginmessages = array();








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

<?php





foreach ($session_messages as $message) {
 echo "<p><strong>" . htmlspecialchars($message) . "</strong></p>\n";
}
if ( is_user_logged_in() ) {
?>

<?php
}



else{

?>

<h1 class="subtitle has-text-centered is-size-2" > Teachers: Please login to your account
</h1>



<form  action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post">
          <ul>
            <li>
              <label for="username">Username:</label>
              <input id="username" type="text" name="teacher_login_username" />
            </li>
            <li>
              <label for="password">Password:</label>
              <input id="password" type="password" name="teacher_login_password" />
            </li>
            <li>
              <button name="teacher_login" type="submit">Sign In</button>

            </li>
          </ul>
        </form>

<?php

}





?>


<?php include("includes/footer.php"); ?>



</section>
</body>




</html>
