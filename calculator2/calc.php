<?php
// include ("Calculator.php");
include ("autoload.php");
//создали экземпляр класса
$calc = new Calculator(
    $_POST['a'],
    $_POST['b']
);
//-> обращение к свойствам объекта
echo $calc->{$_POST['op']}();
?>