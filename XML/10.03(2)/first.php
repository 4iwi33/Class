<?php
$file = "seccond.xml";
$a = $_POST['msg'];
$b = $_POST['name'];
$c = date('d.m.y h-m-s');



//сохраняем в файл XML
$str = <<<XML

<msg>
    <text>$a</text>
    <name>$b</name>
    <date>$c</date>
</msg>
XML;

file_put_contents($file, $str, FILE_APPEND);

?>  