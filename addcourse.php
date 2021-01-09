<?php
// DO NOT REMOVE!
include("includes/init.php");
// DO NOT REMOVE!
$messages = array();

if(!is_student_logged_in())
{
   header("Location: index.php"); 


}

function show_courses($record) {
    ?>
    <tr>
    <form method="post" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>">
    <input type='hidden' name='courseid' value="<?php echo htmlspecialchars($record["id"]); ?>" />
    <th ><?php echo $record["id"]; ?></th>
    <th ><?php echo $record["coursename"]; ?></th>
		<th ><?php echo $record["coursename"]; ?></th>
    <th ><?php echo $record["category"]; ?></th>
    <th ><?php echo $record["description"]; ?></th>
    <th>
      <button class="button is-info" name="addcourse" type="submit">Add Course</button>
    </th>
		
		</form>
    </tr>
    <?php
  }
  $coursecheck = exec_sql_query($db, "SELECT id FROM coursecatalog", NULL)->fetchAll(PDO::FETCH_COLUMN);
  // since the add courses already filters out the courses that the user is currently taking, we do not have to check the 
  // database for duplicates
  if ( isset($_POST["addcourse"]) ) {
    
    $valid_addcourse = FALSE;
    $courseid = filter_input(INPUT_POST, 'courseid', FILTER_SANITIZE_STRING);
    
    // check and see if course is still in our course catalog
    if ( in_array($courseid, $coursecheck) ) {
    $valid_addcourse = TRUE;
    
    }
    // 
    if ($valid_addcourse) {
      $sql = "INSERT INTO studentenrollment ( courseid, studentid) VALUES ( :course, :student)";
      $params = array(
        ':course' => $courseid,
        ':student' => $current_user['id']
        
      );
      $result = exec_sql_query($db, $sql, $params);
      if ($result) {
        array_push($messages, "You have been successfully added to the Course.");
      } else {
        array_push($messages, "Failed to Add the Course.");
      }
    } else {
      array_push($messages, "Failed to sign up for the course. Invalid parameters were added.");
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



<h1 class="subtitle has-text-centered is-size-2" > Browse and Add Courses 
</h1>

<?php
echo '<p class="has-text-centered mx-5 px-5" > Hi ' . htmlspecialchars($current_user['firstname']) .  ', feel free to browse for any courses you are interested in. Below are our currently available courses and the ones you are not currently enrolled in. </p> ';

// get the course id 
//$sql = "SELECT users.id, coursecatalog.coursename, coursecatalog.category , coursecatalog.description FROM users JOIN studentenrollment ON users.id = studentenrollment.studentid JOIN coursecatalog ON coursecatalog.id = studentenrollment.courseid WHERE users.id NOT IN (:curr_user) ";
$sql = "SELECT coursecatalog.id, coursecatalog.coursename, coursecatalog.category , coursecatalog.description FROM coursecatalog 
WHERE coursecatalog.coursename NOT IN 
(SELECT  coursecatalog.coursename FROM users JOIN studentenrollment ON users.id = studentenrollment.studentid 
JOIN coursecatalog ON coursecatalog.id = studentenrollment.courseid WHERE users.id = :curr_user) ORDER BY coursecatalog.id ASC";
$params = array(
    ':curr_user' => $current_user['id']
  );


// Display the courses
$result = exec_sql_query($db, $sql, $params);

if ($result) {
    // The query was successful, let's get the records.
    $records = $result->fetchAll();
    
    if ( count($records) > 0 ) {
      // We have records to display
      ?>

<table>
              <tr>
              <th>Course ID </th>
                <th>Course Name </th>
                <th>Category</th>
                <th>Description</th>
                <th> Availability? </th>
                
              </tr>
    
              <?php
              foreach($records as $record) {
                show_courses($record);
              }
              ?>
        </table>
            <?php
          } else {
            // No results found
            echo "<p>No eligible courses were found. Please come back for more exciting learning opportunities </p>";
          }
        }
        ?>


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
