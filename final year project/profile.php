<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Applications</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            background-color: #f9f9f9;
        }
        .row {
            margin-bottom: 15px;
        }
        .row::after {
            content: "";
            display: table;
            clear: both;
        }
        .col-6 {
            width: 50%;
            float: left;
        }
        .text-center {
            text-align: center;
        }
    </style>
</head>
<?php

$servername = 'localhost';
$user_name = 'root';
$pass_word = '';
$dbname = 'scholarshipmanagement';

$conn = new mysqli($servername, $user_name, $pass_word, $dbname);

// Check the connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
$id= $_GET['id'];

$sql = mysqli_query($conn,"SELECT * FROM applications where sch_id ='$id'");
// $result = $conn->query($sql);
$i = 0; // Initialize the loop counter variable
if ($sql->num_rows > 0) {
// Output data of each row
while ($row = $sql->fetch_assoc()) 
{
?>
<body>

<div class="container">
    <h2>User Profile</h2>
    <div class="row">
        <div class="col-6">
            <label for="scheme_id">Scheme ID</label>
            <input type="text" id="scheme_id" name="scheme_id" value="<?php echo $row['sch_id'] ?>" readonly>
        </div>
        <div class="col-6">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" value="<?php echo $row['username'] ?>" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <label for="full_name">Full Name</label>
            <input type="text" id="full_name" name="full_name" value="<?php echo $row['name'] ?>" readonly>
        </div>
        <div class="col-6">
            <label for="age">Age</label>
            <input type="text" id="age" name="age" value="<?php echo $row['age'] ?>" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?php echo $row['email'] ?>" readonly>
        </div>
        <div class="col-6">
            <label for="gender">Gender</label>
            <input type="text" id="gender" name="gender" value="<?php echo $row['gender'] ?>" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <label for="caste">Caste</label>
            <input type="text" id="caste" name="caste" value="<?php echo $row['caste'] ?>" readonly>
        </div>
        <div class="col-6">
            <label for="house_no">House No</label>
            <input type="text" id="house_no" name="house_no" value="<?php echo $row['houseNo'] ?>" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <label for="street_name">Street Name</label>
            <input type="text" id="street_name" name="street_name" value="<?php echo $row['streetName'] ?>" readonly>
        </div>
        <div class="col-6">
            <label for="city">City</label>
            <input type="text" id="city" name="city" value="<?php echo $row['city'] ?>" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <label for="state">State</label>
            <input type="text" id="state" name="state" value="<?php echo $row['state'] ?>" readonly>
        </div>
        <div class="col-6">
            <label for="country">Country</label>
            <input type="text" id="country" name="country" value="<?php echo $row['country'] ?>" readonly>
        </div>
    </div>
</div>

</body>
<?php 
            $i++;
        }
    }
    else{
        echo "<h3>No items found <h3>";
    }
?>
</html>
