<?php
$time_start = microtime(1);

for ($i=0; $i < 100; $i++) {
    //Ничнго не делать . Повторить 100 раз
}

$time_end = microtime(1);
$time = $time_end - $time_start;

echo "Ничего не делать $time секунд\n";
