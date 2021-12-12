<!DOCTYPE html>
<html>
  <title>Home page</title>
  <?php require "header.php" ?>
  <body>
  <div class="about-section">
  <br>
  <h1>اهلا بك في</h1><img  src="../image/break 44.png" width="150px" height="150px" class="img" > 
  <h1 class="text"> break reservation</h1>
  <p>افضل موقع لاستئجار وعرض الاسترحات</p>
</div>
<h2 style="text-align:center">الاسترحات</h2>
 



  
    <div class="row row-cols-1 row-cols-md-3 g-4">
   
    <?php include "../php/Fetch.php";?>
</div>
<br>
<?php include "../html/footer.php"?>
  </body>