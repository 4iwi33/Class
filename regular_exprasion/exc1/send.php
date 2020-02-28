<?php

//.	- один произвольный символ. Кроме '\n' - конец строки.
//{n,}	- по меньшей мере раз
// print_r($_POST['mail']);
$str =  $_POST['mail'];
$pat = '/^[A-z0-9-]{1,}@[A-z0-9\-]{2,}\.\w{2,6}$/';
if (preg_match($pat, $str)) {
    echo 'yes';
} else {
    echo 'no';
}
