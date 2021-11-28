<?php 
include "../php/connect.php";
if(isset($_POST['submit'])){
session_start();
$filename = $_FILES['image']['name'];
$mybreak=$_POST['mybreak'];

// Select file type
$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));

// valid file extensions
$extensions_arr = array("jpg","jpeg","png","gif");

// Check extension
if( in_array($imageFileType,$extensions_arr) ){

// Upload files and store in database
if(move_uploaded_file($_FILES["image"]["tmp_name"],'../image/'.$filename)){
    // Image db insert sql
    $insert = "update break set image='".$filename."' where users_id=".$_SESSION['id']." AND break_name='$mybreak'";
    if(mysqli_query($conn, $insert)){
        echo "<script>
        alert('تمت  تحديث الصورة');
    window.location.href='../html/image.php';
        </script>";
    }
    else{
      echo 'Error: '.mysqli_error($conn);
    }
}else{
    echo 'Error in uploading file - '.$_FILES['image']['name'].'
';
}
}
}  //  $sql = "update break set image='".$filename."' where users_id='".$_SESSION['id']."";
?>