<?php
require 'connect.php';
session_start();
$mybreak=$_POST['mybreak'];

$query= " DELETE FROM reservations where owner_id='".$_SESSION['id']."' AND break_name='".$mybreak."'";  
  
$result= mysqli_query($conn, $query);
//require 'Logout.php';
if($result)
{
    echo "<script>
    alert('تم حذف الحجز');
    window.location.href='../html/invoice.php';
    </script>";
}
else
echo "<script>
alert('حدث خطأ لا بمكن المسح');
window.location.href='../html/delete.php';
</script>";
mysqli_close($conn);
?>
