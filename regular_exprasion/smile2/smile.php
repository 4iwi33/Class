<?php
$arr = [
 "/\:\-\)/",
 "/\:\-\(/"
];

$s = $_POST['mail'];

$arr2 = [
    '<img src="smile.png" width="30px">',
    '<img src="evil.png"  width="30px">'
];

echo preg_replace($arr, $arr2, $s);

?> 