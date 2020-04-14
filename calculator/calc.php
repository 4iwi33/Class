<?php
include ("Calculator.php");

$calc = new Calculator(
    $_POST['a'],
    $_POST['b']
);
//-> обращение к свойствам объекта
echo $calc->{$_POST['op']}();
?>