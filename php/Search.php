<?php if(isset($_POST['submit'])){ 

require "connect.php";
$name=$_POST['Search'];
$loc=$_POST['Search2'];

$records = mysqli_query($conn,"select * from break where break_name='$name ' AND location='$loc'");


if($records->num_rows > 0){

while($data = mysqli_fetch_array($records))
{  

    ?>
 
       <div class="card-deck"style="max-width: 1100px;">
       <div class="card h-100 bg-secondary  text-white " >
            <?php echo "<img src='../image/".$data['image']."' class='card-img-top'>" ?>
             <div class="card-body">
             
             <p class="card-text"> <?php
            echo "<br>".$data[1];
            echo "<br>".$data[2]. " = الموقع<br>";
            echo $data[3]. " = السعر<br>";
             echo $data['owner_id']. " = رقم المالك<br>";
             ?> </p> 
             <a href="../html/rev.php" class="btn btn-warning">احجز</a>
          <?php
   
}
} else {
  echo '<br><h1>لا توجد استراحة</h1>';
}


}?>