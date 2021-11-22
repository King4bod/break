<?php
require 'connect.php';
session_start();
$mybreak=$_POST['mybreak'];

$query= " DELETE FROM break where users_id='".$_SESSION['id']."' AND break_name='".$mybreak."'";  
  
$result= mysqli_query($conn, $query);
//require 'Logout.php';
if($result)
{

    header('Location: ../html/index.php');
    exit();
}
else
echo " failed to delete ";

mysqli_close($conn);
?>
