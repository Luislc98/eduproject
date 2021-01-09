<?php
// DO NOT REMOVE!
include("includes/init.php");
// DO NOT REMOVE!
// An array to deliver messages to the user.
$messages = array();

if(!is_teacher_logged_in())
{
   header("Location: index.php"); 


}

function show_courses($record) {
    ?>
     <tr>
    <th>  <a href="teacher<?php echo $record["link"]; ?>.php" class="button is-light" > Manage   </a>   </th>
   
    <th ><?php echo $record["id"]; ?></th>
    <th ><?php echo $record["coursename"]; ?></th>
		
    <th ><?php echo $record["category"]; ?></th>
    
    
		
		
    </tr>
    <?php
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





<?php
echo '<p class="has-text-centered mx-5 px-5" > Hi ' . htmlspecialchars($current_user['firstname']) .  ', below are the current courses that you are teaching </p> ';

// get the course id 
$sql = "SELECT coursecatalog.id, coursecatalog.coursename, coursecatalog.category, coursecatalog.link FROM teachers
JOIN teacherenrollment ON teachers.id = teacherenrollment.teacherid 
JOIN coursecatalog ON coursecatalog.id = teacherenrollment.courseid
 WHERE teachers.id = :curr_user ORDER BY coursecatalog.id ASC ";
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
                <th> Course ID  </th>
                <th>Course Name </th>
                <th>Category</th>
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
            echo "<p>There are no records of any courses you are currently teaching. Please contact us if this is not the case. </p>";
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
