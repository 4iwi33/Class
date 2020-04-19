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

echo "<br>";

$a->clear();
$a->href('http://www.tut.by');
$a->innerText('Текст');
$a->class('btn');
$a->id('b1');
$a->style('color:red');
echo $a->HTML();

echo "<br>";

echo $a
    ->clear()
    ->href('https://www.onliner.by')
    ->innerText('onliner')
    ->html();

echo "<br>";

$h = new H(1);

echo $h
    // ->clear()
    // ->level()
    ->innerText('header')
    ->class('btn')
    ->id('b1')
    ->style('color:red')
    ->html();

$table = new Table();
echo $table->clear()
    ->style('border: 1px solid black')
    ->data([
        [1, 2, 3],
        [4, 5, 6]
    ])
    ->html();

    


//<a href='https://www.tut.by' class='btn' id='b1' style='color:red'>Текст</a>
