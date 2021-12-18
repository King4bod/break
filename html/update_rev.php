<!DOCTYPE html>
<html>
    <title>Reservation</title>
<?php include "header.php";
if (!isset($_SESSION['name'])) {
  echo "<script>
  alert('يجب حساب للحجز ');
  window.location.href='../html/Break-login.php';
  </script>";
}?>
   
<link rel="stylesheet" href="../css/add.css">
  <body style="text-align: center">
 
 
      

  <h1> Update-resravtion</h1>  <br><br><br><br>
  <article style="display: flex; justify-content: center; margin-top: 30px;"> 
  <div class="warning">
<form action="../php/update_rev.php" method="post">
<label name="mybreak"  class="form-label">اسم الحجز </label>
                <select name="mybreak">        
         <?php  include "../php/connect.php";
           $records = mysqli_query($conn,"select break_name from reservations  where owner_id=".$_SESSION['id'].""); // fetch data from database
        while($data = mysqli_fetch_array($records))
      {   ?>
                  <option value="<?php echo $data[0];?>"><?php echo $data[0];?></option>
                <?php
      }  ?>     </select>
      <br><br>

<?php  ?>

<label>قم بأختيار بداية التاريخ  
    <input type="date" name="date1" min="2017-04-01" max="2017-04-30">

  </label><br><br>
  <label>قم بأختيار نهاية التاريخ
    <input type="date" name="date2" min="2017-04-01" max="2017-04-30">
  </label><br><br>
                <br>
                <button type="submit" class="button"  >تعديل</button>
                

            </form> 
          <?php
      ?>

    </div>

 
          </body>
</article>
<br> <br> <br> <br> <br> <br><br> <br> <br> 
<?php include "../html/footer.php"?>
</html>