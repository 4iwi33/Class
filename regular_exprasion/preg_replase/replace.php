<?php
//preg_replace — Выполняет поиск и замену по регулярному выражению
$string1 = "This is Sublime text editor";// создаём строку , в ней текст
//создаём вторую,
// "/Sublime/" -выделяем что хотим изменить
// '<i><b>Sublime</b></i>' -как хотим изменить
//  $string1 -где хотим изменить
$string2 = preg_replace("/Sublime/", '<i><b>Sublime</b></i>', $string1);
//и выводим
echo $string1;
echo $string2;
?>