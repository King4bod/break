<?php 
include "connect.php";
if (isset($_POST['submit'])){
    session_start();
 $f1 =$_FILES['file1']['name'];
 //$f2 =$_FILES['file2']['name'];
 //$f3 =$_FILES['file3']['name'];
 //$f4 =$_FILES['file4']['name'];
 $mybreak=$_POST['mybreak'];

 $sql="update break set image='".$f1."' where users_id=".$_SESSION['id']."";
if(mysqli_query($sql)){
    move_uploaded_file($_FILES['file1']['tmp_name'],'../image/');
    echo "Yes";

} else {
    echo "No";
}
}?>
//-------------------------------------------------------
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

// valid file extensions
$extensions_arr = array("jpg","jpeg","png","gif");

// Check extension
if( in_array($imageFileType,$extensions_arr) ){

// Upload files and store in database
if(move_uploaded_file($_FILES["image"]["tmp_name"],'../image/'.$filename)){
    // Image db insert sql
    $insert = "update break set image2='".$filename."' where users_id=".$_SESSION['id']." AND break_name='$mybreak'";
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
$imageFileType2 = strtolower(pathinfo($filename2,PATHINFO_EXTENSION));

// valid file extensions
$extensions_arr = array("jpg","jpeg","png","gif");

// Check extension
if( in_array($imageFileType2,$extensions_arr) ){

// Upload files and store in database
if(move_uploaded_file($_FILES["image2"]["tmp_name"],'../image/'.$filename2)){
    // Image db insert sql
    $insert2 = "update break set image2='".$filename2."' where users_id=".$_SESSION['id']." AND break_name='$mybreak'";
    if(mysqli_query($conn, $insert)){

    }
    else{
    }
}else{
    echo 'Error in uploading file - '.$_FILES['image2']['name'].'
';
}
}
$imageFileType3 = strtolower(pathinfo($filename3,PATHINFO_EXTENSION));

// valid file extensions
$extensions_arr = array("jpg","jpeg","png","gif");

// Check extension
if( in_array($imageFileType3,$extensions_arr) ){

// Upload files and store in database
if(move_uploaded_file($_FILES["image3"]["tmp_name"],'../image/'.$filename3)){
    // Image db insert sql
    $insert3 = "update break set image3='".$filename3."' where users_id=".$_SESSION['id']." AND break_name='$mybreak'";
    if(mysqli_query($conn, $insert)){

    }
    else{
      echo 'Error: '.mysqli_error($conn);
    }
}else{
    echo 'Error in uploading file - '.$_FILES['image3']['name'].'
';
}
}
$imageFileType4 = strtolower(pathinfo($filename4,PATHINFO_EXTENSION));

// valid file extensions
$extensions_arr = array("jpg","jpeg","png","gif");

// Check extension
if( in_array($imageFileType4,$extensions_arr) ){

// Upload files and store in database
if(move_uploaded_file($_FILES["image4"]["tmp_name"],'../image/'.$filename4)){
    // Image db insert sql
    $insert4 = "update break set image4='".$filename4."' where users_id=".$_SESSION['id']." AND break_name='$mybreak'";
    if(mysqli_query($conn, $insert)){

    }
    else{
      echo 'Error: '.mysqli_error($conn);
    }
}else{
    echo 'Error in uploading file - '.$_FILES['image4']['name'].'
';
}
}
}  //  $sql = "update break set image='".$filename."' where users_id='".$_SESSION['id']."";
?>