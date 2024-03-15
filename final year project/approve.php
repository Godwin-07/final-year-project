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

        $i = 0; // Initialize the loop counter variable
if ($sql->num_rows > 0) {
// Output data of each row
while ($row = $sql->fetch_assoc()) 
{
    $sch_id = $row['sch_id'];
    $username = $row['username'];
    
    $i++;
}
}
else{
echo "<h3>No items found <h3>";
}

        $insert_query = mysqli_query($conn,"INSERT INTO `approvedapplications`(`sch_id`, `username`, `name`, `age`, `email`, `gender`, `caste`, `houseNo`, `streetName`, `city`, `state`, `country`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]')");
        echo '<script>alert("Scheme Deleted!"); window.location.href = "clerkDashboard.php";</script>';
?>