<?php
session_start();

if (isset($_SESSION['name'])){
require 'connect.php';
	// المتغيرات
	$break_name=$_POST['break_name'];
	$location=$_POST['Location'];
	$price=$_POST['Price'];
//	$phone=$_POST['phone'];
	$phone_number=$_POST['Number'];
	//$email=$_POST['emil'];
	//$Role=$_POST['Role'];
	

    $query= "update reservations set break_name='".$break_name."',location='".$location."',price='".$price."',phone_number='".$phone_number."' where email=".$_SESSION['name']."
			";
	$result= mysqli_query($conn, $query);

	if( !$result){
		echo 'data is inerted';
		header('Location: ../index.php');
		exit();
	}
	else {
		echo"Database query filed";
		header('Location: ../update.php?status=success');
		exit();
	}


	mysqli_close($conn);}
?>
