<!DOCTYPE html>
<html>
<title>Update break</title>

<?php include "header.php";?>
   
<link rel="stylesheet" href="../css/add.css">
  <body>
  
    
 
      

  <h1> Update-resravtion</h1>
  <article style="display: flex; justify-content: center; margin-top: 30px;"> 
 
  <div class="warning">
            <form action="../php/update.php" method="post">
  <label name="mybreak"  class="form-label">your break </label>
                <select name="mybreak">        
         <?php  include "../php/connect.php";
           $records = mysqli_query($conn,"select break_name from break  where owner_id=".$_SESSION['id'].""); // fetch data from database
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
<br> <br> <br> <br> <br> <br><br> <br> <br> 
<?php include "../html/footer.php"?>
</html>