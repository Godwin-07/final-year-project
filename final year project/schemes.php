<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="template.css">
</head>
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
$query = mysqli_query($con,"SELECT * FROM test");

while($row = mysqli_fetch_array($query))
{
    echo $row['uname']. ' '.$row['pasword'];
    echo "<br>";
}
$con->close();
?>
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
            <?php echo"$row['$username']"; ?>
            </div>
            <div class="schemes"></div>
            <div class="schemes"></div>
            <div class="schemes"></div>
            <div class="schemes"></div>
            <div class="schemes"></div>
        </div>
        </div>
</body>


</html>