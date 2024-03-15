<head>
   <link rel="stylesheet" href="main.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php


?>
<header>
       <nav>
         <a href="homepage.php"><img src="logos/1.5(edited).png"
          style="height: 50px; width:150px;padding-left:20px;"></a>
         <ul class="navlinks"> 
            <li><a href="about.php">About</a></li>
            <li><a href="schemes.php">Schemes</a></li>
            <li><a href="#">Contacts</a></li>
            <li><a href="admin.php">Clerk</a></li>
            <?php
      
         if(isset($_SESSION['uname']))
      {
         echo '
         <form method="post">
         <a href="homepage.php"><button name="logout" class="signup">log out</button></a>
         </form>';
         if(isset($_POST['logout']))
         {
            session_destroy();
         }
      }
      else
      {
         echo '<a href="test.php"> <button class="signup">Sign up</button></a>';
      } 
      
   
   ?>
           
           </ul>
       </nav> 
    </header>