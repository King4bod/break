<html>
    <head>

<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<link rel="stylesheet" href="../css/backgraund.css">
</head>
</html>
<?php 
include "../html/header.php";
require "connect.php";
echo '<li><a href="..//html/index.php"class="btn btn-warning">Back to home page</a></li>';
$name=$_POST['Search'];
$loc=$_POST['Search2'];

$records = mysqli_query($conn,"select * from reservations where break_name='$name ' AND location='$loc'");


if($records->num_rows > 0){

while($data = mysqli_fetch_array($records))
{  

    ?>
 
    <article style="display: flex; justify-content: center; margin-top: 30px;">
       <div class="card-deck"style="max-width: 1100px;">
       <div class="card h-100 bg-secondary  text-white " >
             <img src="..\image\b2.jpg" class="card-img-top" alt="...">
             <div class="card-body">
               <h5 class="card-title"><?php echo $data[1]; ?></h5>
             
             <p class="card-text"> <?php
            
             echo $data[2]. "= الموقع<br>";
             echo $data[3]. " = السعر<br>";
             echo $data[6]. " = رقم المالك<br>";
             ?> </p> 
             <a href="#" class="btn btn-warning">احجز</a>
         </article> <?php
   
}
} else {
  echo '<h1>No resrvation</h1>';
}


?>