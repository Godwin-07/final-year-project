<head>
  <link rel="stylesheet" href="schemes.css">
</head>  
<body>

<?php
$servername = 'localhost';
$user_name = 'root';
$pass_word = '';
$dbname = 'scholarshipmanagement';

$conn = new mysqli($servername, $user_name, $pass_word, $dbname);///
// Check the connection
if ($conn->connect_error) 
{ die("Connection failed: " . $conn->connect_error); }
    $id= $_GET['id'];

$fetch_query=mysqli_query($conn,"SELECT * FROM schemes WHERE sch_id='$id' ");

$i = 0; // Initialize the loop counter variable
if ($fetch_query->num_rows > 0) {
    // Output data of each row
    while ($row = $fetch_query->fetch_assoc()) 
    {    
?>
<div class="container">
      <h2 class="form-title">Scheme editing</h2>
        <form class="form" method="POST">
        <div class="main-user-info">
          <div class="user-input-box">
            <label for="schemeName">Scheme Name</label>
            <input type="text" id="schemeName" name="SchemeName" value="<?php echo $row['sch_name']?>"/>
          </div>
          <div class="user-input-box">
            <label for="Schemeid">Scheme id</label>
            <input type="text" id="Schemeid" name="Schemeid" value="<?php echo $row['sch_id'] ?>" />
          </div>
          <div class="user-input-box">
            <label for="email">offeredby</label>
            <input type="text" id="offeredby" name="offeredby" value="<?php echo $row['offeredby'] ?>" placeholder="Enter offeredby"/>
          </div>
          <div class="user-input-box">
            <label for="description">Description</label>
            <textarea id="description" name="description"  ><?php echo $row['description'] ?></textarea>
          </div>
          <div class="user-input-box">
            <label for="startDate">Start date :</label>
            <input type="date" id="startDate" name="startDate" value="<?php echo $row['start_date'] ?>"/>
          </div>
          <div class="user-input-box">
            <label for="lastDate">Last Date :</label>
            <input type="date" id="lastDate" name="lastDate" value="<?php echo $row['last_date'] ?>"/>
          </div>
          <div class="user-input-box">
            <label for="eligibility">Eligibility</label>
            <textarea id="eligibility" name="eligibility"  ><?php echo $row['eligibility'] ?></textarea>
          </div>
          <div><input class="submit-btn" type="submit" name="edit_submit">
        </div> 
        </div>
        </form>
        </div>
<body>
  <?php

   $i++;
  }
}
else{
  echo "<h3>No items found <h3>";
}
$servername = 'localhost';
$user_name = 'root';
$pass_word = '';
$dbname = 'scholarshipmanagement';

$conn = new mysqli($servername, $user_name, $pass_word, $dbname);///
// Check the connection
if ($conn->connect_error) 
{ die("Connection failed: " . $conn->connect_error); }

if(isset($_POST['edit_submit']))
{
  $sch_name = $_POST['SchemeName'];
  $sch_id = $_POST['Schemeid'];
  $offeredby = $_POST['offeredby'];
  $description = $_POST['description'];
  $start_date = date('Y-m-d',strtotime($_POST['startDate']));
  $last_date = date('Y-m-d', strtotime($_POST['lastDate']));
     
  $eligiblity = $_POST['eligibility'];
    
// Basic input validation - you should implement more robust validation
if (!empty($sch_name) && !empty($sch_id) && !empty($description) && !empty($offeredby) && !empty($start_date) && !empty($last_date) && !empty($eligiblity)) 
{
$query = "UPDATE `schemes` SET `sch_name`='$sch_name',`sch_id`='$sch_id',`description`='$description',`offeredby`='$offeredby',`start_date`= '$start_date',`last_date`='$last_date',`eligibility`='$eligiblity' where sch_id='$id' ";
if ($conn->query($query) === TRUE) {
echo '<script>alert("Scholarship Scheme Edited successfully!"); window.location.href = "clerkDashboard.php";</script>';
exit();
} else {
echo "Error: " . $query . "<br>" . $conn->error;
}
} else {
echo "Please fill in all the fields and make sure the passwords match.";
}

$conn->close();
}  

  ?>
