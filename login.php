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



if ( is_user_logged_in() ) {

foreach ($session_messages as $message) {
 echo "<p><strong>" . htmlspecialchars($message) . "</strong></p>\n";
}

?>

<?php
}



else{

?>

<h1 class="subtitle has-text-centered is-size-2" > Please login to you account
</h1>



<form id="loginForm" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post">
          <ul>
            <li>
              <label for="username">Username:</label>
              <input id="username" type="text" name="loginusername" />
            </li>
            <li>
              <label for="password">Password:</label>
              <input id="password" type="password" name="loginpassword" />
            </li>
            <li>
              <button name="login" type="submit">Sign In</button>

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
