<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="template.css">
</head>


<body id="temp">
    <?php include 'nav.php';?>
    <br><br>
   <center> <div class="h">Schemes</div></center>
    <div class="table">
         
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


    $sql = mysqli_query($conn,"SELECT * FROM applications");
   // $result = $conn->query($sql);
    $i = 0; // Initialize the loop counter variable
if ($sql->num_rows > 0) {
    // Output data of each row
    while ($row = $sql->fetch_assoc()) 
    {
?>
    <div class="schemes" 
        style="font-family: Arial;
                display:flex;
                padding:10px;
                justify-content:space-around;">
    
    <div style="font-family: Arial;
                display:flex;
                flex-direction: column;
                justify-content:space-around;
                max-width:370px;">      
        <div 
        style=
        "font-size:25px;
        color: #01427a;"><?php echo $row['name']?></div>
        <div 
        style=
        "color:grey;
        font-size:16px;">Scholarship id :<?php echo $row['sch_id'] ?></div>
        <div 
        style=
        "color: blue;
        ">User Name :<?php echo $row['username'] ?></div>
        <div class="description"><b>Age :</b><?php echo $row['age'] ?></div>
        <div><b>Gender :</b><?php echo $row['gender'] ?></div>
        <div><b>State :</b><?php echo $row['state'] ?></div>
        <div><b>Country :</b><?php echo $row['country'] ?></div>
    </div>
    <div
    style="display:flex;
            justify-content:center;
            align-items:center;">

    <a href="profile.php?id=<?= $row['sch_id'] ?>"><button
    style="padding: 7px 15px;
    border-style: none;
    border-radius: 7px;
    font-size: medium;
    background-color: rgb(1, 179, 239);
    color:#0c0c0d;
    cursor: pointer;"
    >see more</button></a>

    </div>
    </div>
    <?php 
            $i++;
        }
    }
    else{
        echo "<h3>No items found <h3>";
    }
?>   
       
    </div>
    </div>
</body>



</html>