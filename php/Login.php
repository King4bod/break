<?php
session_start();
  $email = $_POST['email'];
  $password = $_POST['password'];
  


  $conn = new mysqli ('localhost','root','','mydatabase');
  if($conn->connect_error){
      echo "$conn->connect_error";
      die("Connetion failed : ".$conn->connect_error);

  } else {
      $stmt = $conn->prepare ("select * from users where email = ?");
      $stmt->bind_param("s",$email);
      $stmt->execute();
      $stmt_result = $stmt->get_result();
      
      $records = mysqli_query($conn,"select first_name ,last_name,number,users_id from users where email = '$email'"); // fetch data from database
        while($data = mysqli_fetch_array($records))
      {
        $_SESSION["name"] = $data['first_name'];
        $_SESSION["lname"] = $data['last_name'];
        $_SESSION["phone"] = $data['number'];

        $_SESSION["id"] = $data['users_id'];

      }
      if($stmt_result->num_rows > 0){
          $data = $stmt_result->fetch_assoc();

       if($data['password']=== md5($password)){
        echo "<script>
        window.location.href='../html/index.php';
        </script>";   //  echo "<h1> Your First name is : </h1>" . $_SESSION["name"] ."<br>" ;
   // echo "<h1>Your Last name is  : </h1>" . $_SESSION["last"]  ;

        
       
      } else {
        session_destroy();
        echo "<script>
        alert('حدث خطأ البريد الألكتروني غير صحيح او كلمة المرور');
        window.location.href='../html/Break-login.php';
        </script>";     }
    } else { 	
      session_destroy();
      echo "<script>
      alert('لا يوجد لديك بيانات');
      window.location.href='../html/Break-login.php';
      </script>";
    }
}

?>