<?php
// DO NOT REMOVE!
include("includes/init.php");
// DO NOT REMOVE!
$messages = array();
if(!is_teacher_logged_in())
{
   header("Location: index.php"); 


}
$messages = array();

// MAX_FILE_SIZE must be set to bytes
// 1 MB = 1000000 bytes
const MAX_FILE_SIZE = 10000000;
$messages = array();
$upload_submitted = False;

if ( isset($_POST["submit_teacher_file"])  ) {
  // get the info about  uploaded files.
  $teacher_upload_file = $_FILES["teacher_file"];
  $teacher_file_name = filter_input(INPUT_POST, 'teacher_file_name', FILTER_SANITIZE_STRING);
  $teacher_file_description = filter_input(INPUT_POST, 'teacher_file_description', FILTER_SANITIZE_STRING);
  //$teacher_assignment_id = filter_input(INPUT_POST, 'assignment_id', FILTER_SANITIZE_NUMBER_FLOAT );
 
  if ( $teacher_upload_file['error'] == UPLOAD_ERR_OK ) {
    // check if file uploaded correctly
    // call file name
    $teacher_upload_name = basename($teacher_upload_file["name"]);
   // echo '<script>console.log("Your stuff here")</script>';
    // call file extension
    $teacher_upload_ext = strtolower( pathinfo($teacher_upload_name, PATHINFO_EXTENSION) );
    $sql = "INSERT INTO teachersubmissions ( submissionname,description,file_name, file_ext,courseid) VALUES ( :teacher_file_name,:description, :teacher_filename, :extension,:courseid)";
    $params = array(
      ':teacher_file_name' => $teacher_file_name,
      ':description' => $teacher_file_description,
      ':teacher_filename' => $teacher_upload_name,
      ':extension' => $teacher_upload_ext,
      ':courseid' => 1
    );
    $result = exec_sql_query($db, $sql, $params);
    if ($result) {
      //move file to directory
      $file_id = $db->lastInsertId("id");
      $id_filename = 'uploads/teacher_submissions/' . $file_id . '.' . $teacher_upload_ext;
      if ( move_uploaded_file($teacher_upload_file["tmp_name"], $id_filename ) ) {
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



// Insert Assignment form 
// Get the list of current assignments from the database.
$assignment_check = exec_sql_query($db, "SELECT DISTINCT assignmentname FROM courseassignments", NULL)->fetchAll(PDO::FETCH_COLUMN);


if ( isset($_POST["add_assignment"]) ) {
  $valid_add_assignment = TRUE;
  $assignment_name = filter_input(INPUT_POST, 'assignment_name', FILTER_SANITIZE_STRING);
  $assignment_description = filter_input(INPUT_POST, 'assignment_description', FILTER_SANITIZE_STRING);
  $duedate = filter_input(INPUT_POST, 'duedate', FILTER_SANITIZE_STRING);
  
  // check and see if email is already in database of users
  if ( in_array($assignment_name, $assignment_check) ) {
    $valid_add_assignment = FALSE;
  }
  // 
  if ($valid_add_assignment) {
    $sql = "INSERT INTO courseassignments (assignmentname,courseid,assignment_description,duedate) VALUES (:assignmentname, :courseid, :assignment_description, :duedate)";
    $params = array(
      ':assignmentname' => $assignment_name,
      ':courseid' => 1,
      ':assignment_description' => $assignment_description,
      ':duedate' => $duedate
    );
    $result = exec_sql_query($db, $sql, $params);
    if ($result) {
      array_push($messages, "You have successfully added a course.");
    } else {
      array_push($messages, "Failed to add the assignment.");
    }
  } else {
    array_push($messages, "Failed to add the assignment. Invalid parameters were added.");
  }
}










function show_assignments($record) {
  ?>
   <tr>
  
  <th>                                         </th>

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

<h1 class="subtitle has-text-centered is-size-4" > Welcome 
</h1>

<h2>Assignments</h2>


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
                <th>            </th>
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
            echo "<p>There are no current assignements in your course. You can add course assignemnts in the Add assignemnts section. </p>";
          }
        }
        ?>


<h1 class="subtitle has-text-centered is-size-4 mx-4 px-4" > Add an Assignment 
</h1>


<form id="addassignmentForm" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>"  method="post">
          <ul>
            <li>
              <label for="assignment_name"> Assignment Name :</label>
              <input id="assignment_name" type="text" name="assignment_name" />
            </li>
            <li>
              <label for="assignment_description"> Description:</label>
              <input id="assignment_description" type="text" name="assignment_description" />
            </li>
            <li>
              <label for="duedate"> Due Date :</label>
              <input id="duedate" type="text" name="duedate" />
            </li>
           
            <li>
              <button name="add_assignment" type="submit">Add Assignment</button>

            </li>
          </ul>
        </form>

        <?php
    // Write out any messages to the user.
    foreach ($messages as $message) {
      echo "<p><strong>" . htmlspecialchars($message) . "</strong></p>\n";
    }
    $student_submissions = exec_sql_query(
      $db,
      "SELECT studentsubmissions.id , studentsubmissions.studentid, studentsubmissions.file_name, studentsubmissions.file_ext,
       studentsubmissions.assignmentid,studentsubmissions.courseid, users.firstname, users.lastname, users.email ,
       courseassignments.assignmentname, courseassignments.duedate 
       FROM studentsubmissions 
       JOIN users ON studentsubmissions.studentid = users.id 
       JOIN courseassignments ON studentsubmissions.courseid = courseassignments.id
      WHERE studentsubmissions.courseid  = :courseid;",
      array(':courseid' => 1)
      )->fetchAll();
// SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate FROM Orders INNER JOIN Customers ON Orders.CustomerID=Customers.CustomerID;


    // check to see if current user has uploaded any locations on list
  if (count($student_submissions) > 0) {
    echo '<h1 class="subtitle has-text-centered is-size-5 mx-4 px-4"  > Student Submissions <h2>';
    foreach($student_submissions as $student_submission){
      //echo '<a href="login.php?' . http_build_query( array( 'id' => $student_submission['id'] ) ) . '"><href="uploads/student_submissions/' . $student_submission['id'] . '.jpg" alt="' . htmlspecialchars($locations['id']) . '"/></a>' . PHP_EOL;
      echo '<p  >'. 'Title:   ' .htmlspecialchars($student_submission['assignmentname']).  '<p>';
      echo '<p>'. 'Due Date:   '  .htmlspecialchars($student_submission['duedate']).  '<p>';
      echo '<p>'. 'Student ID: '  .htmlspecialchars($student_submission['studentid']).  '<p>';
      echo '<p>'. 'Student Name:  '  .htmlspecialchars($student_submission['firstname']) . ' ' .htmlspecialchars($student_submission['lastname']).   '<p>';
      echo '<a href="uploads/student_submissions/'. htmlspecialchars($student_submission['id']). '.' . htmlspecialchars($student_submission['file_ext']). ' "download >Download submission</a>';
    }
  } else {
    echo '<p><strong>No students have submitted any assignment. </strong></p>';
  }
    ?>

<h1 class="subtitle has-text-centered is-size-4" > Teacher files 
</h1>

<h1 class="subtitle has-text-centered is-size-5 mx-4 px-4" > Add file for students to view(like homework instructions)
</h1>


<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post" enctype="multipart/form-data">
  <input type="file" name="teacher_file" >
  <input type='hidden' name='courseid'  value="1" />
  Name
  <input type="text" name="teacher_file_name" /> Description
  <input type="text" name="teacher_file_description" />  
    <!-- MAX_FILE_SIZE must precede the file input field -->
    <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_FILE_SIZE; ?>" />
   
  <input type="submit" value="Upload File" name="submit_teacher_file">
</form> 











<?php include("includes/footer.php"); ?>



</section>


</body>




</html>
