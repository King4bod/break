<?php


include '../phpqrcode/qrlib.php';
$text = " PRODUCT ID 23456";

QRcode::png($text);


?>