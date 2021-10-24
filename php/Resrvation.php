<?php
	$name = $_POST['name'];
    $email = $_POST['email'];
    $num1;
	// Database connection
	$conn = new mysqli('localhost','root','','mydatabase');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into reservations(id, name_break, location, name, email) values(4,'Al-budaih', 'https://goo.gl/maps/Hb7K6uqiHd164XTNA' ,?, ?)");
		$stmt->bind_param("ss", $name,$email);
	    $stmt->execute();
		//$stmt->store_result();
		//echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	//	echo '<br> <a href="../html/Break-main.html">Click here to go the Homepage</a>';
	//	header("Location: ../html/Break-main.html");
		exit();
	}
	?>