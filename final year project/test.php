<!DOCTYPE html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="signin.css">
    </head>
    <body>
    <?php include 'nav.php'; ?>
    <div class="bdy"> 
    <div class="container" style="margin-top:50px">
      <h2 class="form-title">Registration</h2>
        <form class="form" method="POST">
        <div class="main-user-info">
          <div class="user-input-box">
            <label for="fullName">Full Name</label>
            <input type="text" id="fullName" name="fullName" placeholder="Enter Full Name"/>
          </div>
          <div class="user-input-box">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter Username"/>
          </div>
          <div class="user-input-box">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter Email"/>
          </div>
          <div class="user-input-box">
            <label for="phoneNumber">Phone Number</label>
            <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Enter Phone Number"/>
          </div>
          <div class="user-input-box">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter Password"/>
          </div>
          <div class="user-input-box">
            <label for="confirmPassword">Confirm Password</label>
            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password"/>
          </div>
          <div><input class="submit-btn" type="submit" name="submit">
        </div> 
        <p>if you already have an account 
          <a href="login.php">login here</a></p>
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

    $conn = new mysqli($servername, $user_name, $pass_word, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
}
if(isset($_POST['submit']))
        {
          $name=$_POST['fullName'];
          $username=$_POST['username'];
          $email=$_POST['email'];
          $ph=$_POST['phoneNumber'];
          $password=$_POST['password'];
          $ConfirmPassword=$_POST['confirmPassword'];
        
        
// Basic input validation - you should implement more robust validation
if (!empty($name) && !empty($email) && !empty($username) && !empty($ph) && !empty($password) && ($password == $ConfirmPassword)) 
{
    $query = "INSERT INTO `std_reg_info`(name,email,username,phon_no,password) VALUES ('$name', '$email', '$username', '$ph', '$password')";

    if ($conn->query($query) === TRUE) {
        echo '<script>alert("Account created successfully!"); window.location.href = "login.php";</script>';
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