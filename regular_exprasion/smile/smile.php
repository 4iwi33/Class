<?php
$pat = "/\:\-\)/";
$img = "<img src='smile.png'>";

echo preg_replace($pat, $img, $_POST['mail'])
?>