<?php
if(isset($_POST['submit'])){

session_start();
$filename = $_FILES['image']['name'];
$filename2 = $_FILES['image2']['name'];
$filename3 = $_FILES['image3']['name'];
$filename4 = $_FILES['image4']['name'];


// Select file type
$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
$imageFileType2 = strtolower(pathinfo($filename2,PATHINFO_EXTENSION));
$imageFileType3 = strtolower(pathinfo($filename3,PATHINFO_EXTENSION));
$imageFileType4 = strtolower(pathinfo($filename4,PATHINFO_EXTENSION));

// valid file extensions
$extensions_arr = array("jpg","jpeg","png","gif");

// Check extension
if( in_array($imageFileType,$extensions_arr) && in_array($imageFileType2,$extensions_arr) && in_array($imageFileType3,$extensions_arr) && in_array($imageFileType4,$extensions_arr) ){

// Upload files and store in database
move_uploaded_file($_FILES["image"]["tmp_name"],'../image/'.$filename) ;
move_uploaded_file($_FILES["image2"]["tmp_name"],'../image/'.$filename2) ;
move_uploaded_file($_FILES["image3"]["tmp_name"],'../image/'.$filename3) ;
move_uploaded_file($_FILES["image4"]["tmp_name"],'../image/'.$filename4) ;
}
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
		//$stmt = $conn->prepare("insert into break(break_name, location, price, phone_number,image,image2,image3,image4,users_id ) values( ?, ?, ?, ?,'$filename','$filename2','$filename3','$filename4',". $_SESSION["id"].")");
	//	$stmt->bind_param("ssissssi",$break_name ,$Location, $Price, $Number);
	   // $stmt->execute();
		//$stmt->store_result();
		//echo $execval;
	//	echo "Registration successfully...";
		//$stmt->close();
		$sql = "INSERT  INTO break (break_name, location, price, phone_number,image,image2,image3,image4,users_id )	 VALUES ('$break_name', '$Location', '$Price', '$Number', '$filename', '$filename2','$filename3','$filename4','$_SESSION[id]')";
		if (mysqli_query($conn, $sql)) {
			echo "<script>
	alert('تمت اضافة استراحة');
	window.location.href='../html/index.php';
	</script>";
 } else {
	echo "<script>
	alert('حدث خطأ في اضافة الأستراحة');
window.location.href='../html/Add-resrvation.php';
	</script>";
		 }
		 mysqli_close($conn);
		 
	}
	//	$conn->close();
	//	echo '<br> <a href="../html/Break-main.html">Click here to go the Homepage</a>';

	
 	//header("Location: ../html/index.php");

}

	?>