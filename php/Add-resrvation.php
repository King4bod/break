<?php
	$Name = $_POST['Name'];
	$Location = $_POST['Location'];
	$Stats = $_POST['Stats'];
	$Price = $_POST['Price'];
	$Number = $_POST['Number'];
	// Database connection
	$conn = new mysqli('localhost','root','','mydatabase');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into reservations(first_name, last_name, type, email, password, number) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssii", $Name, $Location, $Stats, $Price, $Number);
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