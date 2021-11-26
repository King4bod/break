<!DOCTYPE html>
<html>
  <head>
    <title>Add-resravtion</title>
<?php include "header.php";?>
   
    <link rel="stylesheet" href="../css/Break2.css">
  </head>
  <body>
 
      

  <h1> Add-resravtion</h1>
  <article style="display: flex; justify-content: center; margin-top: 30px;"> 
 
  <div class="warning">
 <!-- <button type="submit"class="btn"><img src="../image\add2.png "width="35px" height="35px"  alt=""></button>         
-->
  <form action="../php/Add-resrvation.php" method="post">
          
           
 
  <!--<div class="row row-cols-1 row-cols-md-3 g-4">  <img src="../image/b1.png" width="150px" height="150px" class="logo-icon" > <img src="../image/b1.png" width="150px" height="150px" class="logo-icon" > <img src="../image/b1.png" width="150px" height="150px" class="logo-icon" > </div>
-->

                <label for="break_name"class="form-label"> Break name</label> 
                <input class="form-control"
                  type="text"
                  id="break_name"
                  name="break_name"
                />
               
 <label name="Location" id ="Search2" class="form-label">Location </label> 

                  <select  class="form-select "name="Location" id="Location">
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
                <input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder="Say something about this image..."></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>

            </form> 
 
          </body>
</article>
</html>