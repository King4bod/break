<?php


include '../phpqrcode/qrlib.php';
$text = " نجح";

QRcode::png($text);


?>