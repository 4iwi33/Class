<?php
$s = $_POST['mail'];
$temp_plate = "/\[b\](.*)\[\/b\]/";
$newcode = '<b>$1</b>';

echo preg_replace($temp_plate, $newcode, $s);
?>
