<?php
require 'connect.php';
session_start();

$query= " DELETE FROM reservations WHERE uesrs_id=".$_SESSION["id"];  
  
$result= mysqli_query($conn, $query);
require 'Logout.php';
if($result)
{

    header('Location: ../index.php');
    exit();
}
else
echo " failed to delete ";

mysqli_close($conn);
?>
