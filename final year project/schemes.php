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


    $sql = mysqli_query($conn,"SELECT * FROM schemes");
   // $result = $conn->query($sql);
    $i = 0; // Initialize the loop counter variable
if ($sql->num_rows > 0) {
    // Output data of each row
    while ($row = $sql->fetch_assoc()) 
    {
?>
        <div class="schemes">
        <h4>Scheme Name:<?php echo $row['sch_name']?></h4>
            <h4>Scheme id<?php echo $row['sch_id'] ?></h4>
            <h4>Description<?php echo $row['description'] ?></h4>
            <h4>Offered By:<?php echo $row['offeredby'] ?></h4>
            <h4>Start date:<?php echo $row['start_date'] ?></h4>
            <h4>Last Date:<?php echo $row['last_date'] ?></h4>
            <h4>Eligibility Criteria:<?php echo $row['eligibility'] ?></h4>
    </div>
    <?php 
            $i++;
        }
    }
    else{
        echo "<h3>No items found <h3>";
    }





?>   
          <!--  <div class="schemes">
            
            </div>
            <div class="schemes"></div>
            <div class="schemes"></div>
            <div class="schemes"></div>
            <div class="schemes"></div>
            <div class="schemes"></div>  -->
        </div>
        </div>
</body>



</html>