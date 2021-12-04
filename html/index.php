<!DOCTYPE html>
<html>
  <title>Home page</title>
  <head>
  
     <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="..//css/div.css">
  </head>
  <body>
  <div class="about-section">
  <br>
  <h1>اهلا فيك في</h1>
  <h1> break reservation</h1>
  <p>افضل موقع للاستائجار المواقع</p>
</div>
<h2 style="text-align:center">الاسترحات</h2>
 
  <?php require "header.php" ?>


  
    <div class="row row-cols-1 row-cols-md-3 g-4">
   
    <?php include "../php/Fetch.php";?>
  </body>