<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="signin.css">
    </head>
    <body>
    <?php include 'nav.php'; ?> 
    <div class="bdy">
    <div class="container">
      <h2 class="form-title">clerk Log in</h2>
        <form class="form" method="POST">
        <div class="main-user-info">
          <div class="user-input-box">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter Username"/>
          </div>
          <div class="user-input-box">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter Password"/>
          </div>
          <div><input class="submit-btn" type="submit" name="submit">
        </div> 
     <!--   <p>if you are not clerk please leave this page<br> if you are user 
          <a href="signin.php">register here</a></p> -->
        </div>
        </form>
        </div>
    </body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $servername = 'localhost';
    $user_name = 'root';
    $pass_word = '';
    $dbname = 'scholarshipmanagement';

    $con = new mysqli($servername, $user_name, $pass_word, $dbname);

    // Check the connection
    if ($con->connect_error) 
    {
        die("Connection failed: " . $con->connect_error);
    }
}
if(isset($_POST['submit']))
        {
          $uname = $_POST['username'];
          $pasword = $_POST['password'];
        
        
// Basic input validation - you should implement more robust validation
if (!empty($uname) && !empty($pasword))
{
  $query = mysqli_query($con,"SELECT * FROM clerk WHERE ad_username='$uname' AND ad_password = '$pasword'");

    if($query ->num_rows > 0) {
      session_start();
        $_SESSION['adname'] = $uname;
        echo '<script>alert("Login successfull !"); window.location.href = "clerkDashboard.php";</script>';
        exit();
    } else {
        echo '<script>alert("Login failed !"); window.location.href = "clerk.php";</script>';
    }
} else {
    echo '<script> alert("Please fill in all the fields and make sure the passwords match."); window.location.href = "homepage.php";</script>';
}

$con->close();
}
?>