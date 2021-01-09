<?php
// DO NOT REMOVE!
include("includes/init.php");
// DO NOT REMOVE!
// An array to deliver messages to the user.
$messages = array();

if(!is_student_logged_in())
{
   header("Location: index.php"); 


}

function show_courses($record) {
    ?>
     <tr>
    <th>  <a href="student<?php echo $record["link"]; ?>.php" class="button is-light" >Access    </a>   </th>
    <form method="post" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>">
    <input type='hidden' name='courseid'  value="<?php echo htmlspecialchars($record["id"]); ?>" />
    <th>
      <button class="button is-info" name="removecourse" type="submit">Un-Enroll</button>
    </th>
    <th ><?php echo $record["id"]; ?></th>
    <th ><?php echo $record["coursename"]; ?></th>
		<th ><?php echo $record["coursename"]; ?></th>
    <th ><?php echo $record["category"]; ?></th>
    <th ><?php echo $record["description"]; ?></th>
    
		
		</form>
    </tr>
    <?php
  }

  $unenrollcoursecheck = exec_sql_query($db, "SELECT id FROM coursecatalog", NULL)->fetchAll(PDO::FETCH_COLUMN);
  // since the add courses already filters out the courses that the user is currently taking, we do not have to check the 
  // database for duplicates
  if ( isset($_POST["removecourse"]) ) {
    
    $valid_removecourse = FALSE;
    $courseid = filter_input(INPUT_POST, 'courseid', FILTER_SANITIZE_STRING);
    
    // check and see if course is still in our course catalog
    if ( in_array($courseid, $unenrollcoursecheck) ) {
    $valid_removecourse = TRUE;
    
    }
    // 
    if ($valid_removecourse) {
      //$sql = "INSERT INTO studentenrollment ( courseid, studentid) VALUES ( :course, :student)";
      $sql2 = "DELETE FROM studentenrollment WHERE courseid = :course AND studentid = :student";
      $params2 = array(
        ':course' => $courseid,
        ':student' => $current_user['id']
        
      );
      $result = exec_sql_query($db, $sql2, $params2);
      if ($result) {
        array_push($messages, "You have been successfully unenrolled from a Course.");
      } else {
        array_push($messages, "Failed to Unenroll.");
      }
    } else {
      array_push($messages, "Failed to Unenroll. Invalid parameters were added.");
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



<h1 class="subtitle has-text-centered is-size-2" > Your Current Courses
</h1>

<?php
echo '<p class="has-text-centered mx-5 px-5" > Hi ' . htmlspecialchars($current_user['firstname']) .  ', below are the current courses that you are taking </p> ';

// get the course id 
$sql = "SELECT coursecatalog.id, coursecatalog.coursename, coursecatalog.category , coursecatalog.description, coursecatalog.link
 FROM users 
JOIN studentenrollment ON users.id = studentenrollment.studentid 
JOIN coursecatalog ON coursecatalog.id = studentenrollment.courseid WHERE users.id = :curr_user ORDER BY coursecatalog.id ASC ";
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
                <th>            </th>
                <th>            </th>
                <th> Course ID  </th>
                <th>Course Name </th>
                <th>Category</th>
                <th>Description</th>
                
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
            echo "<p>No enrolled courses were found. Please browse through out course catalog to sate your interests.</p>";
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
