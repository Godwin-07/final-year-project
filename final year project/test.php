<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'test';

    $conn = new mysqli($servername, $username, $password, $dbname);

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
        
        
// Basic input validation - you should implement more robust validation/sanitization
if (!empty($name) && !empty($email) && !empty($username) && !empty($ph) && !empty($password) && ($password == $ConfirmPassword)) {
    $query = "INSERT INTO details(username, email, password) VALUES ('$name', '$email', '$username', '$ph', '$password',)";

    if ($conn->query($query) === TRUE) {
        echo '<script>alert("Account created successfully!"); window.location.href = "homepage.php";</script>';
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
?>