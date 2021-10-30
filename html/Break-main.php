

<!DOCTYPE html>
<html>
  <head>
    <title>Break</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Break2.css">

    <ul><li> <?php session_start(); if (isset($_SESSION['name'])) {
        echo '<a class="active" href="../php/Logout.php">Log out</a>';
    } else {
      echo '<a class="active" href="../html/Break-login.html">Login</a>';
    }?></li>
      <!--  <li><a class="active" href="../html/Break-login.html">Login</a></li>-->
        <li><a href="../html/Break-register.html">Register</a></li>
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

        <li><img src="../css/break.jpeg"></li>
   <!--

      <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
          <option selected>نوع حسابك</option>
          <option value="1">مؤجر</option>
          <option value="2">مستاجر</option>
        
        </select>-->  
      </ul>
  </head>
  <body>
    
    <p id="co"> Break 1 <br>Break name: Albdiah<br>Location: Albdaih<br>Price per day:400 SAR<br><br><br><br><button type="button">Click</button>
      <br>
      <a href="../html/Details.html">For more details</a>
    </p>
    <p id="co2">Break 2 <br>Break name: Al-swidi<br>Location : Al-swidi<br>Price per day:450 SAR<br><br><br><br><button type="button">Click me</button>
      <br>
      <a href="../html/Details.html">For more details</a>
    </p>
    <p id="co3">Break 3<br>Break name: Lbun<br>Location : Lbun<br>Price per day:500 SAR<br><br><br><br><button type="button">Click me</button>
      <br>
      <a href="../html/Details.html">For more details</a>
    </p>
    <p id="co4">Break 4<br>Break name: Al-rmal<br>Location : Al-rmal<br>Price per day:350 SAR<br><br><br><br><button type="button">Click me</button>
      <br>
      <a href="../html/Details.html">For more details</a>
    </p>

  </body>
</html>
<!--
<li><img src="break.jpeg"></li>
<li><p style="float:left">Welcome</p></li>
-->