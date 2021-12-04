<!DOCTYPE html>
<html>
  <head>
    <title>Add-resravtion</title>
<?php include "header.php";?>
   
    <link rel="stylesheet" href="../css/add.css">
  
 
  </head>
  <body>
 
      

  <h1> Add-resravtion</h1>
  <article style="display: flex; justify-content: center; margin-top: 30px;"> 
 
  <div class="warning">
 <!-- <button type="submit"class="btn"><img src="../image\add2.png "width="35px" height="35px"  alt=""></button>         
-->
          
           
 
  <!--<div class="row row-cols-1 row-cols-md-3 g-4">  <img src="../image/b1.png" width="150px" height="150px" class="logo-icon" > <img src="../image/b1.png" width="150px" height="150px" class="logo-icon" > <img src="../image/b1.png" width="150px" height="150px" class="logo-icon" > </div>
-->

                <p>
                  <?php include "../php/connect.php";
                  $id=$_SESSION['id'];
               
                  $records = mysqli_query($conn,"select * from reservations  where users_id ='$id'"); // fetch data from database
                   if($records->num_rows > 0){
                   while($data = mysqli_fetch_array($records))
               {   
          
        
                     echo "Break id =".$data['break-id'].'<br>';
                     echo "Break name :".$data['name'].'<br>';
                     echo "Break price =".$data['price'].'<br>';
                     echo "Break location :".$data['location'].'<br>';
                     echo "Start date =".$data['start_date'].'<br>';
                     echo "End date =".$data['end_date'].'<br>';
                     echo "Your id =".$data['users_id'].'<br>';
                     echo '<button type="submit" class="button">print</button>';
               }
              }    else {
                    echo "No reservations";
              }
        /*<form>
          <label>Choose your preferred party date:
           <input type="date" name="party" min="2017-04-01" max="2017-04-30">
           </label>
           </form>  */
                ?>

              </p> 
                     


  
 
          </body>
</article>
</html>                   
