<!DOCTYPE html>
<html>
  <head>
  <title> My-resravtion</title>
<?php include "header.php";?>
   
<link rel="stylesheet" href="../css/add.css">
  </head>
  <body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script><body>
    
 
      

  <h1> My-resravtion</h1>
  <article style="display: flex; justify-content: center; margin-top: 70px;"> 
 
  <div class="adiv">
  
  <form action="../php/Add-resrvation.php" method="post">



  <div class="row row-cols-1 row-cols-md-3 g-4">       
  <h1 class="txtadd">add</h1>
            <a  href="../html/Add-resrvation.php">  <img  src="../image/add-but.png" width="50px" height="50px" class="butimg" > </a>
      </div>
      <div class="row row-cols-1 row-cols-md-3 g-4">       
      <h1 class="txtadd">Update</h1>
      <a  href="../html/update.php"><img  src="../image/up-but.png" width="50px" height="50px"class="butimg" ></a>
      </div>
      <div class="row row-cols-1 row-cols-md-3 g-4">       
      <h1 class="txtadd">Update-pictures</h1>
      <a  href="../html/image.php"><img  src="../image/add2.png" width="50px" height="50px"class="butimg" ></a>
      </div>
      <div class="row row-cols-1 row-cols-md-3 g-4">  
      <h1 class="txtadd">delete</h1>
      <a   href="../html/delete.php"><img  src="../image/delete-but.png" width="50px" height="50px"class="butimg" ></a>
            </div>
          
</div>
            </form> 
 
          </body>
</article>
</html>