<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$type = $_POST['type'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];

	// Database connection
	$conn = new mysqli('localhost','root','','mydatabase');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$sql = "INSERT INTO users (first_name, last_name, type, email, password, number )	 VALUES ('$firstName', '$lastName', '$type', '$email', MD5('$password'), '$number')";
		
		if (mysqli_query($conn, $sql)) {
		session_start();
	$_SESSION["name"] = $firstName;	
		echo "<script>
	alert('تمت اضافة حساب');
	window.location.href='../html/index.php';
	</script>";
 } else {
	echo "<script>
	alert('حدث خطأ لا يمكن اضافة حساب');
	window.location.href='../html/Break-register.php';
	</script>";
		 }
		 mysqli_close($conn);
		 
	}

	?>