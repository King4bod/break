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
  <body>
  <nav>
    <img src="../image/break 44.png" width="50px" height="50px" class="logo-icon" >
  <ul>
    <li></li>
    <li> <?php session_start(); if (isset($_SESSION['name'])) {
      echo '<a class="active" href="../php/Logout.php">Log out</a>';
  } else {
    echo '<a class="active" href="../html/Break-login.html">Login</a>';
  }?></li>    <li><a href="../html/Break-register.html">Register</a></li>
    <li><a href="..//html/Add-resrvation.html">Add resrvation</a></li>
    <li><a href="s">Search</a></li>

    <li><p> 
          <?php  if (isset($_SESSION['name'])) {
        //echo "Hello Tariq";
        echo  "Welcome ".$_SESSION['name'];
         } else {
        echo 'Welcome to Break';  
       }
         ?></p></li>
    <!-- <li><p>Welcome to break resrvation</p></li> -->
    
  </ul>
  
</nav>

</body>


</html>

