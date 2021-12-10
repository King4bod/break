<?php

	$start = $_POST['date1'];
	$end = $_POST['date2'];
    $break=$_POST["mybreak"];
	session_start();
	// Database connection
   include "../php/connect.php";
    $records = mysqli_query($conn,"select * from break where break_name='$break'"); // fetch data from database
 while($data = mysqli_fetch_array($records))
{ 
    $s1=$data['break-id'];
    $s2=$data['break_name'];
    $s3=$data['location'];
    $s4=$data['price'];
    $s5=$data['phone_number'];


	//	$stmt = $conn->prepare("insert into reservations(break-id) values(".$s1.")");
		//$stmt->bind_param("isisssissi", $s1, $s2, $s4, $s3, $start, $end,$s6,$_SESSION['name'],$_SESSION['lname'],$_SESSION['phone']);
//	  $stmt->execute();
		//$stmt->store_result();
		//echo $execval;
	//	echo "Registration successfully...";
	//	$stmt->close();
		//$conn->close();
        //		$stmt = $conn->prepare("insert into reservations(break-id, break_name, price, location, start_date, end_date,users_id,first_name,last_name,phone_number_user) values(".$s1.", ".$s2.", ".$s4.", ".$s3.", ".$start.", ".$end.",".$s6.",".$_SESSION['name'].",".$_SESSION['lname'].",".$_SESSION['phone'].")");
        $sql = "INSERT INTO reservations (break_id, break_name, price, location, start_date, end_date,owner_id,first_name,last_name,phone_number_user)	 VALUES ('$s1', '$s2', '$s4', '$s3', '$start', '$end','$_SESSION[id]','$_SESSION[name]','$_SESSION[lname]','$_SESSION[phone]')";
	 if (mysqli_query($conn, $sql)) {
		echo "<script>
		alert('تمت اضافة حجز');
		window.location.href='../html/invoice.php';
		</script>";
		 } else {
			echo "<script>
			alert('هناك حجز بالفعل في تاريخ ".$start."  او لم يتم ادخال تاريخ بشكل صحيح');
			window.location.href='../html/rev.php';
			</script>";
	 }
	 mysqli_close($conn);
     
}




	
	?>