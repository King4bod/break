<?php
  $email = $_POST['email'];
  $password = $_POST['password'];


  $conn = new mysqli ('localhost','root','','Break');
  if($conn->connect_error){
      echo "$conn->connect_error";
      die("Connetion failed : ".$conn->connect_error);

  } else {
      $stmt = $conn->prepare ("select * from users where email = ?");
      $stmt->bind_param("s",$email);
      $stmt->execute();
      $stmt_result = $stmt->get_result();
      if($stmt_result->num_rows > 0){
          $data = $stmt_result->fetch_assoc();
      
       if($data['password']=== $password){
		header("Location: ../html/Break-main.html");
        
       
      } else {
          echo "<h2>false Email or password</h2>";
      }
    } else { echo "<h2>false Email or password</h2>";
    }
}

?>