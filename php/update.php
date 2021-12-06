<?php
session_start();

if (isset($_SESSION['name'])){
require 'connect.php';
	// المتغيرات
	$mybreak=$_POST['mybreak'];
	$break_name=$_POST['break_name'];
	$location=$_POST['Location'];
	$price=$_POST['Price'];
//	$phone=$_POST['phone'];
	$phone_number=$_POST['Number'];
	//$email=$_POST['emil'];
	//$Role=$_POST['Role'];
	

    $query= "update break set break_name='".$break_name."',location='".$location."',price='".$price."',phone_number='".$phone_number."' where owner_id='".$_SESSION['id']."' AND break_name='".$mybreak."'
			";
	$result= mysqli_query($conn, $query);

	if( !$result){
		echo "<script>
		alert('تم تحديث المعلومات  ');
		window.location.href='../html/update.php';
		</script>";
	}
	else {
		echo "<script>
		alert('حدث خطأ لا يمكن التحديث');
		window.location.href='../html/update.php';
		</script>";
	}


	mysqli_close($conn);}
?>
