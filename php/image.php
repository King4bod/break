<?php 
include "../php/connect.php";
if(isset($_POST['submit'])){
session_start();
$filename = $_FILES['image']['name'];
$filename2 = $_FILES['image2']['name'];
$filename3 = $_FILES['image3']['name'];
$filename4 = $_FILES['image4']['name'];

$mybreak=$_POST['mybreak'];

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
    // Image db insert sql
    $insert = "update break set image='".$filename."',image2='".$filename2."',image3='".$filename3."',image4='".$filename4."' where owner_id=".$_SESSION['id']." AND break_name='$mybreak'";
    if(mysqli_query($conn, $insert)){
        echo "<script>
        alert('تمت  تحديث الصور');
    window.location.href='../html/image.php';
        </script>";
    }
    else{
        echo "<script>
        alert('حدث خطأ لا يمكن تحديث الصور');
    window.location.href='../html/image.php';
        </script>";
    }
}else{
    echo 'Error in uploading file - '.$_FILES['image']['name'].'
';
}
}
 //  $sql = "update break set image='".$filename."' where users_id='".$_SESSION['id']."";
?>