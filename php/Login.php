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
      
      $records = mysqli_query($conn,"select first_name ,users_id from users where email = '$email'"); // fetch data from database
        while($data = mysqli_fetch_array($records))
      {
        $_SESSION["name"] = $data[0];
        $_SESSION["id"] = $data[1];

      }
      if($stmt_result->num_rows > 0){
          $data = $stmt_result->fetch_assoc();

       if($data['password']=== $password){
		header("Location: ../html/index.php");
  //  echo "<h1> Your First name is : </h1>" . $_SESSION["name"] ."<br>" ;
   // echo "<h1>Your Last name is  : </h1>" . $_SESSION["last"]  ;

        
       
      } else {
          echo "<h2>false Email or password</h2>";
      }
    } else { echo "<h2>false Email or password</h2>";
    }
}

?>