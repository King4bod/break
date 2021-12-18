<?php
require 'connect.php';
session_start();
$mybreak=$_POST['mybreak'];
$start = $_POST['date1'];
$end = $_POST['date2'];
$query= " update reservations set start_date='".$start."',end_date='".$end."' where owner_id='".$_SESSION['id']."' AND break_name='".$mybreak."'";  
  
$result= mysqli_query($conn, $query);
//require 'Logout.php';
if($result)
{
    echo "<script>
    alert('تم تعديل الحجز');
    window.location.href='../html/invoice.php';
    </script>";
}
else
echo "<script>
alert('حدث خطأ لا بمكن التعديل');
window.location.href='../html/update_rev.php';
</script>";
mysqli_close($conn);
?>
