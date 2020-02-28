<?php

$str = "All <b>Hello</b> !!!";

$pat = "/<b>.*<\/b>/i";// 
$rep = "<i>$0</i>"; //на что меняем

$str2 = preg_replace($pat, $rep, $str);
echo $str2;
?>
