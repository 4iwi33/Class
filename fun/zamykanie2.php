<?php
$msg = "Hello";

$test = function()use(&$msg) //& переменная передаётся по ссылке
{
    echo $msg;
};

$msg = "Bue";

$test();
?>