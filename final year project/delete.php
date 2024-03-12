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
        $delete_query = mysqli_query($conn,"DELETE FROM schemes WHERE sch_id ='$id'");
        echo '<script>alert("Scheme Deleted!"); window.location.href = "adminDashboard.php";</script>';
?>