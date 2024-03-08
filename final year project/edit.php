
<head>
  <link rel="stylesheet" href="schemes.css">
</head>  
<body>
<div class="container">
      <h2 class="form-title">Scheme editing</h2>
        <form class="form" method="POST">
        <div class="main-user-info">
          <div class="user-input-box">
            <label for="schemeName">Scheme Name</label>
            <input type="text" id="schemeName" name="SchemeName" placeholder="Enter Scheme name"/>
          </div>
          <div class="user-input-box">
            <label for="username">Scheme id</label>
            <input type="text" id="Schemeid" name="Schemeid" placeholder="Enter Scheme id"/>
          </div>
          <div class="user-input-box">
            <label for="email">offeredby</label>
            <input type="text" id="offeredby" name="offeredby" placeholder="Enter offeredby"/>
          </div>
          <div class="user-input-box">
            <label for="description">Description</label>
            <textarea id="description" name="description" placeholder="Enter Description Here" ></textarea>
          </div>
          <div class="user-input-box">
            <label for="startDate">Start date :</label>
            <input type="date" id="startDate" name="startDate" placeholder="Enter Start Date"/>
          </div>
          <div class="user-input-box">
            <label for="lastDate">Last Date :</label>
            <input type="date" id="lastDate" name="lastDate" placeholder="Enter Last Date"/>
          </div>
          <div class="user-input-box">
            <label for="eligibility">Eligibility</label>
            <textarea id="eligibility" name="eligibility" placeholder="Enter Eligibility Here" ></textarea>
          </div>
          <div><input class="submit-btn" type="submit" name="edit_submit">
        </div> 
        </div>
        </form>
        </div>
<body>

<?php

   /* $servername = 'localhost';
    $user_name = 'root';
    $pass_word = '';
    $dbname = 'scholarshipmanagement';

    $conn = new mysqli($servername, $user_name, $pass_word, $dbname);///
    // Check the connection
    if ($conn->connect_error) 
    { die("Connection failed: " . $conn->connect_error); }
        $id= $_GET['id'];
      //  $delete_query = mysqli_query($conn,"DELETE FROM schemes WHERE sch_id ='$id'");
      //  echo '<script>alert("Scheme Deleted!"); window.location.href = "adminDashboard.php";</script>'; */
?>