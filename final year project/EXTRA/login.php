<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") 
{
    $servername = 'localhost';
    $user_name = 'root';
    $pass_word = '';
    $dbname = 'bca';

    $con = new mysqli($servername, $user_name, $pass_word, $dbname);

    // Check the connection
    if ($con->connect_error) 
	{
        die("Connection failed: " . $con->connect_error);
    	}
	else
	{
	echo "<h1><center>log successful</center></h1>";
	}
}
if(isset($_POST['submit']))
{

$uname = $_POST['username'];
$pasword = $_POST['password'];

$query = mysqli_query($con,"SELECT * FROM login WHERE username='$uname' AND password = '$pasword'");

if($query->num_rows > 0)
{
echo "<h1><center>login successful</center></h1>";
}
else
{
echo "<h1><center>login failed</center></h1>";
}}
