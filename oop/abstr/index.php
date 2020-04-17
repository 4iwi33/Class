<?php
include("autoload.php");

$a = new Student("Petr", "Ivanov");
echo $a->inrtoduce();
echo $a->learn();

echo "<br>";

$b = new Teacher("Ivan", "Petrov");
echo $b->inrtoduce();
echo $b->teach();