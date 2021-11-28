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
            <form action="../php/update.php" method="post">
  <label name="mybreak"  class="form-label">your break </label>
                <select name="mybreak">        
         <?php  include "../php/connect.php";
           $records = mysqli_query($conn,"select break_name from break  where users_id=".$_SESSION['id'].""); // fetch data from database
        while($data = mysqli_fetch_array($records))
      {   ?>
                  <option value="<?php echo $data[0];?>"><?php echo $data[0];?></option>
                <?php
      }  ?>     </select>
      <br>
                <label for="break_name"class="form-label"> Break name</label> 
                <input class="form-control"
                  type="text"
                  id="break_name"
                  name="break_name"
                />
               
                <label name="Location" id ="Location" class="form-label">Location </label> 

<select  class="form-select" name="Location" id="Location">
                  <option value="alriath">الرياض</option>
                   <option value="jaddh">جدة</option>
                   <option value="aldmam">الدمام</option>
                   <option value="jazan">جازان</option>
    </select>
         
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
                <br>                
                <button type="submit" class="button">submit</button>

            </form> 
 
          </body>
</article>
</html>