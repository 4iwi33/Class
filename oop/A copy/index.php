<?php

declare(strict_types=1);

include('autoload.php');

$a = new A();

echo $a
    ->clear()
    ->href('http://www.av.by')
    ->innerText('av.by')
    ->class('btn')
    ->id('b1')
    ->style('color:red')
    ->HTML();

echo "<br>";

$b = new B();
echo $b
    ->clear()
    ->href('https://www.onliner.by')
    ->class('btn')
    ->id('b1')
    ->style('color:blue')
    ->innerText('onliner')
    ->html();

// $a->clear();
// $a->href('http://www.tut.by');
// $a->innerText('Текст');
// $a->class('btn');
// $a->id('b1');
// $a->style('color:red');
// echo $a->HTML();

// echo "<br>";

// echo $a
//     ->clear()
//     ->href('https://www.onliner.by')
//     ->innerText('onliner')
//     ->html();

// echo "<br>";





    


//<a href='https://www.tut.by' class='btn' id='b1' style='color:red'>Текст</a>
