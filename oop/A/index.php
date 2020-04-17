<?php

declare(strict_types=1);

include('autoload.php');

$a = new A();

echo $a->clear()
    ->href('http://www.tut.by')
    ->innerText('Текст')
    ->class('btn')
    ->id('b1')
    ->style('color:red')
    ->HTML();


    $a->clear();
    $a->href('http://www.tut.by');
    $a->innerText('Текст');
    $a->class('btn');
    $a->id('b1');
    $a->style('color:red');
    echo $a->HTML();

//<a href='https://www.tut.by' class='btn' id='b1' style='color:red'>Текст</a>