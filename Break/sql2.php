<?php
  $email = $_POST['email'];
  $password = $_POST['password'];


  $conn = new mysqli ('localhost','root','','test');
  if($conn->connect_error){
      echo "$conn->connect_error";
      die("Connetion failed : ".$conn->connect_error);

  } else {
      $stmt = $conn->prepare ("select * from reg2 where email = ?");
      $stmt->bind_param("i",$email);
      $stmt->execute();
      $stmt_result = $stmt->get_result();
      if($stmt_result->num_rows > 0){
          $data = $stmt_result->fetch_assoc();
      
       if($data['password']=== $password){
          echo "<h2>Login Succsefully</h2>";
       
      } else {
          echo "<h2>Nope</h2>";
      }
    } else { echo "<h2>Nope</h2>";
    }
}

?>