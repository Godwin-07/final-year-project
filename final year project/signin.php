<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="signin.css">
    </head>
    <body>
    <div class="container">
      <h1 class="form-title">Registration</h1>
        <form class="form" method="post">
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
        </form>
        </div>
        <?php
        
        if(isset($_POST['submit']))
        {
          $name=$_POST['fullName'];
          $username=$_POST['username'];
          $email=$_POST['email'];
          $ph=$_POST['phoneNumber'];
          $pasSword=$_POST['password']; 
        
        
        }

        ?>
    
    </body>
</html>