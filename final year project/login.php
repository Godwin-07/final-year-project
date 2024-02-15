<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="signin.css">
    </head>
    <body>
    <div class="container">
      <h2 class="form-title">Log in</h2>
        <form class="form" action="">
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
        <p>if you don't have an account 
          <a href="signin.php">register here</a></p>
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
    $dbname = 'test';

    $conn = new mysqli($servername, $user_name, $pass_word, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
}
if(isset($_POST['submit']))
        {
          $LG_username=$_POST['username'];
          $LG_password=$_POST['password'];
        
        
// Basic input validation - you should implement more robust validation
if (!empty($username) && !empty($password))
{
    $query = "SELECT * FROM test(username,password) WHERE (username,password == '$LG_username','$LG_password')";

    if ($conn->query($query) === TRUE) {
        echo '<script>alert("Login successfull !"); window.location.href = "homepage.php";</script>';
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