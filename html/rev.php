<!DOCTYPE html>
<html>
    <title>Reservation</title>
<?php include "header.php";?>
   
<link rel="stylesheet" href="../css/add.css">
  <body>
 
 
      

  <h1> Update-resravtion</h1>
  <article style="display: flex; justify-content: center; margin-top: 30px;"> 
  <div class="warning">
<form action="../php/rev.php" method="post">
<label name="mybreak"  class="form-label">Select a break:</label>
                <select name="mybreak">        
         <?php  include "../php/connect.php";
           $records = mysqli_query($conn,"select break_name from break "); // fetch data from database
        while($data = mysqli_fetch_array($records))
      {   ?>
                  <option value="<?php echo $data[0];?>"><?php echo $data[0];?></option>
                <?php
      }  ?>     </select>
      <br>

<?php  ?>

    

     

           
         
<label>Choose your preferred party date:
    <input type="date" name="date1" min="2017-04-01" max="2017-04-30">
  </label>
  <label>Choose your preferred party date:
    <input type="date" name="date2" min="2017-04-01" max="2017-04-30">
  </label>
                <br>
                <button type="submit" class="button">submit</button>

            </form> 
          <?php
      ?>

     

 
          </body>
</article>
<br> <br> <br> <br> <br> <br><br> <br> <br> 
<?php include "../html/footer.php"?>
</html>