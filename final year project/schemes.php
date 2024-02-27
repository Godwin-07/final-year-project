<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="template.css">
</head>


<body id="temp">
    <?php include 'nav.php';?>
    <br><br>
   <center> <div class="h">Schemes</div></center>
    <div class="table">
        <div class="filters">
            <div class="f1">
                Scholarship Catogories
                <input type="checkbox" name="catogories">
            </div>
        </div>  
        <div class="list">
            <div class="schemes">
            
            </div>
            <div class="schemes"></div>
            <div class="schemes"></div>
            <div class="schemes"></div>
            <div class="schemes"></div>
            <div class="schemes"></div>
        </div>
        </div>
</body>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") 
{
    $servername = 'localhost';
    $user_name = 'root';
    $pass_word = '';
    $dbname = 'test';

    $con = new mysqli($servername, $user_name, $pass_word, $dbname);

    // Check the connection
    if ($con->connect_error) 
    {
        die("Connection failed: " . $con->connect_error);
    }
}
$result = mysqli_query($con, "SELECT * FROM test");

if (!$result) {
    die('Error: ' . mysqli_error($con));
}

while($row = mysqli_fetch_array($result))
{
    echo $row['uname']. ' '.$row['pasword'];
    echo "<br>";
}
$con->close();
?>


</html>