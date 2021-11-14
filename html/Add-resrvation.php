<!DOCTYPE html>
<html>
  <head>
    <title>
<?php include "header.php";?>
   
    <link rel="stylesheet" href="../css/Break2.css">
  </head>
  <body>
 
      

  <h1> Add-resravtion</h1>
  <article style="display: flex; justify-content: center; margin-top: 30px;"> 
 
  <div class="warning">
            <form action="../php/Add-resrvation.php" method="post">
              <label for="id" class="form-label"> id</label>
              <input class="form-control"
                type="text"
                id="id"
                name="id"
              />
           

                <label for="break_name"class="form-label"> Break name</label> 
                <input class="form-control"
                  type="text"
                  id="break_name"
                  name="break_name"
                />
               
                <label for="Location"class="form-label">Location </label> 
                <input class="form-control"
                  type="text"
                  id="Location"
                  name="Location"
                />
         
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