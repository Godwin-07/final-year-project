<head>
  <link rel="stylesheet" href="schemes.css">
</head>  
<body>
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
    ?>

<div class="container">
      <h2 class="form-title">Scholarship Applications</h2>
        <form class="form" method="POST">
        <div class="main-user-info">
          <div class="user-input-box">
            <label for="Schemeid">Scheme id</label>
            <input type="text" id="Schemeid" name="Schemeid" value="<?php echo $id;?>"/>
          </div>
          <div class="user-input-box">
            <label for="username">User Name</label>
            <input type="text" id="username" name="username" placeholder="Enter User Name"/>
          </div>
          <div class="user-input-box">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Enter Full Name"/>
          </div>
          <div class="user-input-box">
            <label for="age">Age</label>
            <input type="text" id="age" name="age" placeholder="Enter age"/>
          </div>
          <div class="user-input-box">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter email"/>
          </div>
          <div class="user-input-box">
            <label for="gender">Gender :</label>
            <input style="width:30px" type="radio" id="gender" name="gender" value="male">male<br>
            <input style="width:30px" type="radio" id="gender" name="gender" value="female">female
          </div>
          <div class="user-input-box">
            <label for="caste">caste</label>
            <input type="text" id="caste" name="caste" placeholder="Enter caste"/>
          </div>
          <div class="user-input-box">
            <label for="houseno">House no :</label>
            <input type="text" id="houseno" name="houseno" placeholder="Enter house number Here"/>
          </div>
          <div class="user-input-box">
            <label for="streetname">Street Name</label>
            <input type="text" id="streetname" name="streetname" placeholder="Enter streetname Here"/>
          </div>
          <div class="user-input-box">
            <label for="city">city</label>
            <input type="text" id="city" name="city" placeholder="Enter city Here"/>
          </div>
          <div class="user-input-box">
            <label for="state">State</label>
            <input type="text" id="state" name="state" placeholder="Enter state Here"/>
          </div>
          <div class="user-input-box">
            <label for="country">Country</label>
            <input type="text" id="country" name="country" placeholder="Enter country Here"/>
          </div>
          <div><input style="width:90px" class="submit-btn" type="submit" name="apply_submit">
        </div> 
        </div>
        </form>
        </div>

        
    <?php

    if(isset($_POST['apply_submit']))
    {
      $sch_id = $_POST['Schemeid'];
      $username = $_POST['username'];
      $name = $_POST['name'];
      $age = $_POST['age'];
      $email = $_POST['email'];
      $radio = $_POST['gender'];
                if($radio == "male")
                {
                  $gender = "male";
                }
                else
                {
                  $gender = "female";
                }
      $caste = $_POST['caste'];
      $houseno = $_POST['houseno'];
      $streetname = $_POST['streetname'];
      $city = $_POST['city'];
      $state = $_POST['state'];
      $country = $_POST['country'];
        
// Basic input validation - you should implement more robust validation
if (!empty($sch_id) && !empty($username) && !empty($name) && !empty($age) && !empty($email) && !empty($gender)&& !empty($caste)&& !empty($houseno)&& !empty($streetname)&& !empty($city)&& !empty($state)&& !empty($country)) 
{
$query = "INSERT INTO `applications`(`sch_id`, `username`, `name`, `age`, `email`, `gender`, `caste`, `houseNo`, `streetName`, `city`, `state`, `country`) VALUES ('$sch_id','$username','$name','$age','$email','$gender','$caste','$houseno','$streetname','$city','$state','$country')";

if ($conn->query($query) === TRUE) 
{
    echo '<script>alert("Scholarship Applied successfully!"); window.location.href = "schemes.php";</script>';
    exit();
} 
else 
{
    echo "Error: " . $query . "<br>" . $conn->error;
}
} 
else 
{
  echo '<script>alert("Please fill in all the fields.!");</script>';
}

$conn->close();
}    
?>
        
<body>