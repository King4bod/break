<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$type = $_POST['type'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];

	// Database connection
	$conn = new mysqli('localhost','root','','Break');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into users(first_name, last_name, type, email, password, number) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $firstName, $lastName, $type, $email, $password, $number);
	    $stmt->execute();
		//$stmt->store_result();
		//echo $execval;
	//	echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	//	echo '<br> <a href="../html/Break-main.html">Click here to go the Homepage</a>';
		header("Location: ../html/Break-main.html");
		exit();
	}
	?>