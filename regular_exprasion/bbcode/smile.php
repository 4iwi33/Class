<?php
$arr = [ //создаём массив
 "/\:\-\)/",
 "/\:\-\(/"
];

// $s = $_POST['mail'];

$arr2 = [ //создаём второй массив
    '<img src="smile.png" width="30px">',
    '<img src="evil.png" width="30px">'
];

echo preg_replace($arr, $arr2, $_POST['mail']); //$s либо
?>