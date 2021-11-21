<!DOCTYPE html>
<html>
  <head>
    <title>
<?php include "header.php";?>
   
    <link rel="stylesheet" href="../css/Break2.css">
  </head>
  <body>
 
      

  <h1> Update-resravtion</h1>
  <article style="display: flex; justify-content: center; margin-top: 30px;"> 
 
  <div class="warning">
            <form action="../php/update.php" method="post">
          
         <?php  include "../php/connect.php";
           $records = mysqli_query($conn,"select break_name from reservations  where users_id=".$_SESSION['id'].""); // fetch data from database
        while($data = mysqli_fetch_array($records))
      {   ?>
 
 <label name="mybreak"  class="form-label">your break </label>
                <select name="mybreak">
                  <option value="1"><?php echo $data[0];?></option>
                 
                </select>
                <?php
      
      }  ?>
      <br>
                <label for="break_name"class="form-label"> Break name</label> 
                <input class="form-control"
                  type="text"
                  id="break_name"
                  name="break_name"
                />
               
                <label name="Location" id ="Location" class="form-label">Location </label>
                <select name="Location" id="Location">
                  <option value="alriyad">الرياض</option>
                  <option value="jaddh">جدة</option>
                  <option value="aldmam">الدمام</option>
                  <option value="jazan">جازان</option>
                </select>
                <br>
         
                <label for="Price"class="form-label"> Price per day </label>
                <input class="form-control"
                  type="text"
                  id="Price"
                  name="Price"
                />
              
                <label for="Number"class="form-label"> Phone number </label> 
                <input class="form-control"
                  type="text"
                  id="Number"
                  name="Number"
                  
                />
                
                <button type="submit" class="btn btn-warning">submit</button>

            </form> 
 
          </body>
</article>
</html>