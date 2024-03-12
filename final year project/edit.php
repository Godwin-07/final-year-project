
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

    if(isset($_POST['edit_submit']))
    {
      $sch_name = $_POST['SchemeName'];
      $sch_id = $_POST['Schemeid'];
      $offeredby = $_POST['offeredby'];
      $description = $_POST['description'];
      $start_date = $_POST['startDate'];
      $last_date = $_POST['lastDate'];
      $eligiblity = $_POST['eligibility'];
        
// Basic input validation - you should implement more robust validation
if (!empty($name) && !empty($email) && !empty($username) && !empty($ph) && !empty($password) ) 
{
$query = "INSERT INTO schemes(sch_name,sch_id,offeredby,description,start_date,last_date,eligiblity) VALUES ('$sch_name', '$sch_id', '$offeredby', '$description', '$start_date','$last_date','$eligiblity')";

if ($conn->query($query) === TRUE) {
    echo '<script>alert("Scheme Edited successfully!"); window.location.href = "adminDashboard.php";</script>';
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

<div class="container">
      <h2 class="form-title">Scheme editing</h2>
        <form class="form" method="POST">
        <div class="main-user-info">
          <div class="user-input-box">
            <label for="schemeName">Scheme Name</label>
            <input type="text" id="schemeName" name="SchemeName" placeholder="Enter Scheme name"/>
          </div>
          <div class="user-input-box">
            <label for="Schemeid">Scheme id</label>
            <input type="text" id="Schemeid" name="Schemeid" value="<?php echo $id;?>" />
          </div>
          <div class="user-input-box">
            <label for="email">offeredby</label>
            <input type="text" id="offeredby" name="offeredby" placeholder="Enter offeredby"/>
          </div>
          <div class="user-input-box">
            <label for="description">Description</label>
            <textarea id="description" name="description" placeholder="Enter Description Here" ></textarea>
          </div>
          <div class="user-input-box">
            <label for="startDate">Start date :</label>
            <input type="date" id="startDate" name="startDate" placeholder="Enter Start Date"/>
          </div>
          <div class="user-input-box">
            <label for="lastDate">Last Date :</label>
            <input type="date" id="lastDate" name="lastDate" placeholder="Enter Last Date"/>
          </div>
          <div class="user-input-box">
            <label for="eligibility">Eligibility</label>
            <textarea id="eligibility" name="eligibility" placeholder="Enter Eligibility Here" ></textarea>
          </div>
          <div><input class="submit-btn" type="submit" name="edit_submit">
        </div> 
        </div>
        </form>
        </div>
<body>
