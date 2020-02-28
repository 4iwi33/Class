<?php
$str = "not to be";

$pat = "/^(be)|(not\sto\sbe)$/i"; // (|-или) ($-конец строки) (s-однострочная строка)

if (preg_match($pat, $str)) { //ищет "$pat" в "$str"
    echo "Вхождение найдено.";
} else {
    echo "Вхождение не найдено.";
}
