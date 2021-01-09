<?php
// DO NOT REMOVE!
include("includes/init.php");
// DO NOT REMOVE!



$login_messages = array();








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


if ( is_student_logged_in() ) {



?>

<?php
}

else
{

?>

<h1 class="subtitle has-text-centered is-size-2" > Please login to you account
</h1>



<form  action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post">
          <ul>
            <li>
              <label for="username">Username:</label>
              <input id="username" type="text" name="student_loginusername" />
            </li>
            <li>
              <label for="password">Password:</label>
              <input id="password" type="password" name="student_loginpassword" />
            </li>
            <li>
              <button name="student_login" type="submit">Sign In</button>

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
