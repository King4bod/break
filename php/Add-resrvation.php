<?php
	$Name = $_POST['Name'];
	$Location = $_POST['Location'];
	$pool = $_POST['pool'];
	$Price = $_POST['Price'];
	$Number = $_POST['Number'];
	// Database connection
	$conn = new mysqli('localhost','root','','mydatabase');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into add-resravtion(id, break-name, location, stats, price, phone_number ) values(1, ?, ?, ?, ?,?)");
		$stmt->bind_param("sssii", $Name, $Location, $pool, $Price, $Number);
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