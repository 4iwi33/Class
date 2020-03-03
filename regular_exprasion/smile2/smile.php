<?php
$arr = [
 "/\:\-\)/",
 "/\:\-\(/"
];

$s = $_POST['mail'];

$arr2 = [
    "<img src='smile.png'>",
    "<img src='evil.png'>"
];

echo preg_replace($arr, $arr2, $s);

?>