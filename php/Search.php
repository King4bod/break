<html>
    <head>

<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<link rel="stylesheet" href="../css/div.css">
<link rel="stylesheet" href="../css/search.css">
</head>
</html>
<?php 
include "../html/header.php";
require "connect.php";
echo '<li><a href="..//html/index.php"class="btn btn-warning">Back to home page</a></li>';
$name=$_POST['Search'];
$loc=$_POST['Search2'];

$records = mysqli_query($conn,"select * from break where break_name='$name ' AND location='$loc'");


if($records->num_rows > 0){

while($data = mysqli_fetch_array($records))
{  

    ?>
 
    <article style="display: flex; justify-content: center; margin-top: 30px;">
       <div class="card-deck"style="max-width: 1100px;">
       <div class="card h-100 bg-secondary  text-white " >
            <?php echo "<img src='../image/".$data['image']."' class='card-img-top'>" ?>
             <div class="card-body">
               <h5 class="card-title"><?php echo $data[1]; ?></h5>
             
             <p class="card-text"> <?php
            
             echo $data[2]. "= الموقع<br>";
             echo $data[3]. " = السعر<br>";
             echo $data['owner_id']. " = رقم المالك<br>";
             ?> </p> 
             <a href="#" class="btn btn-warning">احجز</a>
         </article> <?php
   
}
} else {
  echo '<br><h1>No resrvation</h1>';
}


?>