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
  <article style="display: flex; justify-content: center;"> 
 
  <nav class="bd">
    <img src="../image/break 44.png" width="50px" height="50px" class="logo-icon" >
  <ul>
    <li></li>
    <li> <?php session_start(); if (isset($_SESSION['name'])) {
        echo '<a class="active" href="../php/Logout.php">Log out</a>';
        echo '<li><a href="..//html/Add-resrvation.php">Add resrvation</a></li>';
    } else {
      echo '<a class="active" href="../html/Break-login.html">Login</a></li>';
      echo '<li><a href="../html/Break-register.html">Register</a></li> ';
    }?>

    <li>  <form action="../php/Search.php" method="post">  
    
    <input  type="text" placeholder="Search for resrvation" name="Search">

      <button type="submit"class="btn"><img src="../image\icons8-search-64.png "width="35px" height="35px"  alt=""></button>
    </form>
  </li>
   
    <li><p style="color:white"> 
          <?php  if (isset($_SESSION['name'])) {
        //echo "Hello Tariq";
        echo  "Welcome ".$_SESSION['name'];
         } else {
        echo 'Welcome to Break';  
       }
         ?>
         </p></li> 
  </ul>
  
</nav>

</body>

      </article> 
 
</html>


