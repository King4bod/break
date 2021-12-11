<!DOCTYPE html>
<html>
    <title>Invoice</title>
<?php include "header.php";?>
   
    <link rel="stylesheet" href="../css/add.css">
  
 
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
               
                  $records = mysqli_query($conn,"select * from reservations  where owner_id ='$id'"); // fetch data from database
                   if($records->num_rows > 0){
                   while($data = mysqli_fetch_array($records))
               {   
          
        
                     
                     echo "Break name :".$data['break_name'].'<br>';
                     echo "Break price =".$data['price'].'<br>';
                     echo "Break location :".$data['location'].'<br>';
                     echo "Start date =".$data['start_date'].'<br>';
                     echo "End date =".$data['end_date'].'<br>';
                     
                     ?>
            <form action="" method="post">
            <button type="submit"  name="<?php echo $data['break_name'] ?>" class="button">Cancel</button>

               </form> 
                     <?php
                     echo '-----------------------------';
                     if (isset($_POST[$data['break_name']])) {
               $query= " DELETE FROM reservations where owner_id='".$_SESSION['id']."' AND break_name='".$data['break_name']."'";  
               $result= mysqli_query($conn, $query);

               if($result)
{
    echo "<script>
    alert('تم حذف الحجز');
    window.location.href='../html/invoice.php';
    </script>";
}
                     }
                   
               
               }
              } else {
                echo "No resrvation";
              }
      
                ?>

              </p> 
                     


  
 
          </body>
</article>
<br> <br> <br> <br> <br> <br><br> <br> <br> 
<?php include "../html/footer.php"?>
</html>