<?php
$msg = "Hello";

$test = function()use($msg)
{
    echo $msg;
};

$msg = "Bue";

$test();
?>