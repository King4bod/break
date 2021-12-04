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
</html>