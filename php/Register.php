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
		//$stmt = $conn->prepare("insert into users(first_name, last_name, type, email, password, number) values(?, ?, ?, ?, ?, ?)");
	//	$stmt->bind_param("sssssi", $firstName, $lastName, $type, $email, $password, $number);
	  //  $stmt->execute();
		//$stmt->store_result();
		//echo $execval;
	//	echo "Registration successfully...";
	//	$stmt->close();
		//$conn->close();
		$sql = "INSERT INTO users (first_name, last_name, type, email, password, number )	 VALUES ('$firstName', '$lastName', '$type', '$email', '$password', '$number')";
		if (mysqli_query($conn, $sql)) {
			echo "<script>
	alert('تمت اضافة حساب');
	window.location.href='../html/index.php';
	</script>";
 } else {
			echo "Error: " . $sql . "
	" . mysqli_error($conn);
		 }
		 mysqli_close($conn);
		 
	
		session_start();
		$_SESSION["name"] = $firstName;
	//	$_SESSION["last"] = $lastName;

	}

	?>