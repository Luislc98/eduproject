<?php
// DO NOT REMOVE!
include("includes/init.php");
// DO NOT REMOVE!

// An array to deliver messages to the user.
$messages = array();

function show_courses($record) {
    ?>
    <tr>
      <td><?php echo htmlspecialchars($record["coursename"]);?></td>
      <td><?php echo htmlspecialchars($record["category"]);?></td>
      <td><?php echo htmlspecialchars($record["description"]);?></td>
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



<h1 class="subtitle has-text-centered is-size-2" > Browse through our exciting catalog of courses and improve your skills today!
</h1>

<?php

$sql = "SELECT * FROM coursecatalog";
$params = array();


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
        echo "<p>No matching reviews found.</p>";
      }
    }
    ?>






<?php include("includes/footer.php"); ?>



</section>
</body>




</html>
