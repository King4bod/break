<!DOCTYPE html>
<html>
<title>Update picture</title>
<?php include "header.php";?>
   
<link rel="stylesheet" href="../css/add.css">
  <body>
  
    
 
      

  <h1> Update-resravtion</h1>
  <article style="display: flex; justify-content: center; margin-top: 50px;"> 
 
  <div class="warning">
  <form method='post' action='../php/image.php' enctype='multipart/form-data'>
 <?php include "../php/connect.php";
    $img = mysqli_query($conn, "SELECT break_name,image,image2,image3,image4 FROM break where owner_id=".$_SESSION['id']."");
       while ($row = mysqli_fetch_array($img)) {     
        
        echo $row['break_name']." صور ";
        echo "<br>"; 
        echo "<img src='../image/".$row['image']."' style='width:50px;height:50px;' >";
          echo "<img src='../image/".$row['image2']."' style='width:50px;height:50px;' >";   
          echo "<img src='../image/".$row['image3']."' style='width:50px;height:50px;' >";   
          echo "<img src='../image/".$row['image4']."' style='width:50px;height:50px;' >";   
          echo "<br>";
      } 
?> 
  <label name="mybreak"  class="form-label">استراحتك </label>
                <select name="mybreak" class="form-select">        
         <?php  include "../php/connect.php";
           $records = mysqli_query($conn,"select break_name from break  where owner_id=".$_SESSION['id'].""); // fetch data from database
        while($data = mysqli_fetch_array($records))
      {   ?>
                  <option value="<?php echo $data[0];?>"><?php echo $data[0];?></option>
                <?php
      }  ?>     </select>
  
  <br>
  
<div class="form-group">

 <input type="file" name="image" >
 <input type="file" name="image2" >
 <input type="file" name="image3" >
 <input type="file" name="image4" >

</div> 
<div class="form-group"> 
 <input type='submit' name='submit' value='ارسال' class="button">
</div> 
</form>

    </div>
    </article>
<br> <br> <br> <br> <br> <br>
<?php include "../html/footer.php"?>