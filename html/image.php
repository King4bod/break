<!DOCTYPE html>
<html>
  <head>
    <title>
<?php include "header.php";?>
   
<link rel="stylesheet" href="../css/add.css">
  </head>
  <body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script><body>
    
 
      

  <h1> Update-resravtion</h1>
  <article style="display: flex; justify-content: center; margin-top: 30px;"> 
 
  <div class="warning">
  <form method='post' action='../php/image.php' enctype='multipart/form-data'>
 <?php include "../php/connect.php";
    $img = mysqli_query($conn, "SELECT image,image2,image3,image4 FROM break where users_id=".$_SESSION['id']."");
       while ($row = mysqli_fetch_array($img)) {     
          echo "<img src='../image/".$row['image']."' style='width:400px;height:400px;' >";
          echo "<img src='../image/".$row['image2']."' style='width:400px;height:400px;' >";   
          echo "<img src='../image/".$row['image3']."' style='width:400px;height:400px;' >";   
          echo "<img src='../image/".$row['image4']."' style='width:400px;height:400px;' >";   

      } 
?> 
  <label name="mybreak"  class="form-label">your break </label>
                <select name="mybreak" class="form-select">        
         <?php  include "../php/connect.php";
           $records = mysqli_query($conn,"select break_name from break  where users_id=".$_SESSION['id'].""); // fetch data from database
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
 <input type='submit' name='submit' value='Upload' class="button">
</div> 
</form>

    </div>
    </article>
<br> <br> <br> <br> <br> <br><br> <br> <br> 
<?php include "../html/footer.php"?>