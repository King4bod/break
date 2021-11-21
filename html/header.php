<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


    
<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
  
   
  </head>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script><body>
  
  
  
  <article style="display: flex; justify-content: center;"> 
 
  <nav class="bd">
  <a class="active" href="../html/index.php"><img src="../image/break 44.png" width="50px" height="50px" class="logo-icon" ></a>
  <ul>
    <li></li>
    <li> <?php session_start(); if (isset($_SESSION['name'])) {
        echo '<a class="active" href="../php/Logout.php">Log out</a>';
        echo '<li><a href="../html/my_resrvation.php">My resrvation</a></li>';
    } else {
      echo '<a class="active" href="../html/Break-login.html">Login</a></li>';
      echo '<li><a href="../html/Break-register.html">Register</a></li> ';
    }?>

    <li>
    <a class="active" href="../html/Search.php">Search</a>  </li>
<!--<li>    <img src="https://img.icons8.com/fluency/48/000000/menu--v2.png"/></li> -->
    <li><p style="color:white"> 
          <?php  if (isset($_SESSION['name'])) {
        //echo "Hello Tariq";
        echo  "Welcome ".$_SESSION['name'];
         } else {
        echo 'Welcome to Break';  
       }
         ?>
         </p></li> 
         <li>
    <a class="active" href="../html/About_us.php">About us</a>  </li>
  </ul>
  
</nav>






</body>

      </article> 
 
</html>


