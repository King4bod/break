<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="..//css/div.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>


    
<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
  
   
  </head>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script><body>
  
  
  
  <article style="display: flex; justify-content: center;"> 
 

  <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
    <a class="active" href="../html/index.php"><img src="../image/break 44.png" width="50px" height="50px" class="logo-icon" ></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">

  
    <li class="nav-item"><p style="color:white"> 
          <?php session_start();
          if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
            // last request was more than 30 minutes ago
            session_unset();     // unset $_SESSION variable for the run-time 
            session_destroy();   // destroy session data in storage
            echo "<script>
            alert('لم تفعل شيئا خلال 30 دقيقة الماضية انتهت جلستك');
            </script>";
        }
        $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
           if (isset($_SESSION['name'])) {
        //echo "Hello Tariq";
        echo  "Welcome ".$_SESSION['name'];
         } else {
        echo 'Welcome to Break';
       }
         ?>
         </p></li> 
         <li class="nav-item">
    <a class="active" href="../html/Search.php">بحث</a>  </li>

    <li class="nav-item"> <?php  if (isset($_SESSION['name'])) {
        echo '<a class="nav-link" href="../php/Logout.php">تسجيل الخروج </a>';
   include "../php/connect.php";
    $records = mysqli_query($conn,"select type from users where users_id = '$_SESSION[id]'"); // fetch data from database
    while($data = mysqli_fetch_array($records))
  {
  if($data['type']=== "Owner"){
  echo '<li  class="nav-item"><a href="../html/my_break.php">استراحاتي </a></li>';
  echo '<li  class="nav-item"><a href="../html/my_reservation.php">حجوزاتي</a></li>';


} else {
         echo '<li  class="nav-item"><a href="../html/my_reservation.php">حجوزاتي</a></li>';

}
}

      //  echo '<li  class="nav-item"><a href="../html/my_break.php">My Break</a></li>';
      //  echo '<li  class="nav-item"><a href="../html/my_reservation.php">My Reservation</a></li>';

    } else {
      echo '<a class="nav-link" href="../html/Break-login.php">تسجيل الدخول</a></li>';
      echo '<li  class="nav-item"><a href="../html/Break-register.php">تسجيل حساب جديد</a></li> ';
    }
      

    ?>
    




        
      </div>
    </div>
  </nav>
</header>




</body>

      </article> 
 
</html>
