<?php

$str = "All <b>Hello</b> !!!";

$pat = "/<b>(.*)<\/b>/i";//заменяет <b> на курсив
$rep = "<i>$1</i>"; //

$str2 = preg_replace($pat, $rep, $str);
echo $str2;
?>
