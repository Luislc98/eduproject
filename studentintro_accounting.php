<?php
// DO NOT REMOVE!
include("includes/init.php");
// DO NOT REMOVE!
if(!is_user_logged_in())
{
   header("Location: index.php"); 


}
// Set maximum file size for uploaded files.
// MAX_FILE_SIZE must be set to bytes
// 1 MB = 1000000 bytes
const MAX_FILE_SIZE = 10000000;
$messages = array();
$upload_submitted = False;

if ( isset($_POST["submit_upload"]) && is_user_logged_in() ) {
  // get the info about  uploaded files.
  $upload_info = $_FILES["assignment_file"];
  $assignment_id = filter_input(INPUT_POST, 'assignment_id', FILTER_SANITIZE_NUMBER_FLOAT );
 
  if ( $upload_info['error'] == UPLOAD_ERR_OK ) {
    // check if file uploaded correctly
    // call file name
    $upload_name = basename($upload_info["name"]);
   // echo '<script>console.log("Your stuff here")</script>';
    // call file extension
    $upload_ext = strtolower( pathinfo($upload_name, PATHINFO_EXTENSION) );
    $sql = "INSERT INTO studentsubmissions ( studentid,file_name, file_ext, courseid,assignmentid) VALUES ( :studentid, :filename, :extension,:courseid,:assignmentid)";
    $params = array(
      ':studentid' => $current_user['id'],
      ':filename' => $upload_name,
      ':extension' => $upload_ext,
      ':courseid' => 1,
      ':assignmentid' => $assignment_id
    );
    $result = exec_sql_query($db, $sql, $params);
    if ($result) {
      //move file to directory
      $file_id = $db->lastInsertId("id");
      $id_filename = 'uploads/student_submissions/' . $file_id . '.' . $upload_ext;
      if ( move_uploaded_file($upload_info["tmp_name"], $id_filename ) ) {
        // Successfully moved the tmp uploaded file to the uploads directory.
        array_push($messages, "Successfully uploaded file");
        $upload_submitted = True;
      }
      else
      {
        array_push($messages, "Failed to upload file. TODO");
      }

    }
    else
    {
      array_push($messages, "Failed to upload file. TODO");
    }
  } else
  {
    // Upload failed.
    array_push($messages, "Failed to upload file. TODO");
  }
}



function show_assignments($record) {
  global $upload_submitted;
  ?>
   <tr>
   <th>
    <?php
   if ($upload_submitted) {
            
            echo "<p>File Uploaded </p>";
          }
  else {
  
  ?>
   <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post" enctype="multipart/form-data">
  <input type="file" name="assignment_file" >
  <input type='hidden' name='courseid'  value="1" />
    <!-- MAX_FILE_SIZE must precede the file input field -->
    <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_FILE_SIZE; ?>" />
    <input type="hidden" name="assignment_id" value='<?php echo $record["id"]; ?>' />
  <input type="submit" value="Upload Assignment" name="submit_upload">
</form>                                      
<?php 
  }
?>


</th>

  <th ><?php echo $record["assignmentname"]; ?></th>
  <th ><?php echo $record["assignment_description"]; ?></th>
  
  <th ><?php echo $record["duedate"]; ?></th>
  
  
  
  
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



<h1 class="subtitle has-text-centered is-size-2" > Intro to Accounting
</h1>

<h1 class="subtitle has-text-centered is-size-4" > Instructor: Arky Asmal 
</h1>


<h1 class="subtitle has-text-centered is-size-5" > Current Class Assignments
</h1>

<?php
echo '<p class="has-text-centered mx-5 px-5" > Below are the current assignments that students can submit files for</p> ';

// get the course id 
$sql = "SELECT *  FROM courseassignments
 WHERE courseid = :courseid ;";
$params = array(':courseid'=>1);


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
                <th> Status           </th>
                <th> Assignment Name  </th>
                <th>Description </th>
                <th>Due Date</th>
              </tr>
    
              <?php
              foreach($records as $record) {
                show_assignments($record);
              }
              ?>
        </table>
            <?php
          } else {
            // No results found
            echo "<p>There are no current assignements in your course.Please wait for your instructor to submit assignments . </p>";
          }
        }
        ?>
















<?php 

foreach ($messages as $message) {
  echo "<p><strong>" . htmlspecialchars($message) . "</strong></p>\n";
 }


include("includes/footer.php"); 

?>



</section>
</body>




</html>
