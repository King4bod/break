<!DOCTYPE html>
<html>
  <head>
    <title>
<?php include "header.php";?>
    </title>Add-resravtion</title>
    <link rel="stylesheet" href="..//css/Break1.css">

  </head>
  <body>
            <h1> Add-resravtion</h1>
          <div class="panel-body">
            <form action="../php/Add-resrvation.php" method="post">
              <label for="id"> id</label>
              <input
                type="text"
                id="id"
                name="id"
              />
              <br>

                <label for="break_name"> Break name</label> 
                <input
                  type="text"
                  id="break_name"
                  name="break_name"
                />
                <br>
                <label for="Location">Location </label> 
                <input
                  type="text"
                  id="Location"
                  name="Location"
                />
                <br>
                <label for="Price"> Price per day </label>
                <input
                  type="text"
                  id="Price"
                  name="Price"
                />
                <br>
                <label for="Number"> Phone number </label> 
                <input
                  type="text"
                  id="Number"
                  name="Number"
                />
                
              <input type="submit"/>
            </form> 
  </body>
</html>




<!--<!DOCTYPE html>
<html>
  <head>
    <title>

    </title>Add-resravtion</title>
    <link rel="stylesheet" href="..//css/Break1.css">
  </head>
  <body>
            <h1> Add-resravtion</h1>
          <div class="panel-body">
            <form action="sql.php" method="post">
                <label for="Name"> Break name</label> 
                <input
                  type="text"
                  id="Name"
                  name="Name"
                />
                <br>
                <label for="Location">Location </label> 
                <input
                  type="text"
                  id="Location"
                  name="Location"
                />
                <br> 
                <label for="Stats">Stats</label> 
                <br>
                   
                    <input
                      type="checkbox"
                      name="pool"
                      value="pool"
                      id="pool"
                    /><img src="https://img.icons8.com/plasticine/15/000000/outdoor-swimming-pool.png"/>
                <br>
                  <label for="football pitch" ><input
                      type="checkbox"
                      name="football pitch"
                      value="football pitch"
                      id="football pitch"
                    /><img src="https://img.icons8.com/external-justicon-lineal-color-justicon/15/000000/external-football-sport-justicon-lineal-color-justicon.png"/>
                  <br>
                  <label for="tent" 
                  ><input
                    type="checkbox"
                    name="tent"
                    value="tent"
                  />Tent</label>
                <br>
                <label for="Price"> Price per day </label>
                <input
                  type="number"
                  id="price"
                  name="Price"
                />
                <br>
                <label for="Number"> Phone number </label> 
                <input
                  type="number"
                  id="Number"
                  name="Number"
                />
                
                
              <input type="submit"/>
            </form> 
  </body>
</html>-->