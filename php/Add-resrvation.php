<?php
session_start();
   // $id =$_POST['id'];
	$break_name =$_POST['break_name'];
	$Location = $_POST['Location'];
	$Price = $_POST['Price'];
	$Number = $_POST['Number'];
	// Database connection
	$conn = new mysqli('localhost','root','','mydatabase');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into break(break_name, location, price, phone_number,users_id ) values( ?, ?, ?, ?,". $_SESSION["id"].")");
		$stmt->bind_param("ssii",$break_name ,$Location, $Price, $Number);
	    $stmt->execute();
		//$stmt->store_result();
		//echo $execval;
	//	echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	//	echo '<br> <a href="../html/Break-main.html">Click here to go the Homepage</a>';
	echo "<script>
	alert('تمت اضافة استراحة');
	window.location.href='../html/index.php';
	</script>";

 	//header("Location: ../html/index.php");
		exit();
	}
	?>