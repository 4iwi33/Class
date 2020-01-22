<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New2</title>
</head>

<body>
    <?php

    for ($i = 1;; $i++) {
        if ($i > 14) {
            break;
        }
        echo " $i<br>";
    }
    echo "<br>";
    $i = 1;
    for (;;) {
        if ($i > 10) {
            break;
        }
        echo $i;
        $i++;
    }
    echo "<br>";

    $s = 0;
    for ($i = 1; $i <= 10; $i++) {
        $s = $s + $i;
    }
    echo $s;
    echo "<br>";
    $arr = array("one", "two", "three");

    foreach ($arr as $value) {
        echo "value: $value<br>\n";
    }

    echo "<br>";
    $arr = array("one", "two", "three");

    foreach ($arr as $key => $value) {
        echo "key: $key; value: $value<br>\n";
    }
    // создать массив из чисел (найти сумму всех чисел)

    echo "<br>";
    $s = 0;
    $arr = array(10, 20, 30, 40);

    foreach ($arr as $name) {
        $s = $s + $name;
    }
    echo $s;

    echo "<br>";

    //example 1
    $i = 1;
    while ($i <= 10) {
        echo $i++;
    }
    echo "<br>";
    //exmple 2
    $i = 1;
    while ($i <= 10) :
        echo $i;
        $i++;
    endwhile;

    echo "<br>";

    $i = 1;
    $s = 0;
    while ($i <= 10) :
        $s = $s + $i;
        $i++;
    endwhile;
    echo $s;
    echo "<br>";
    //do while 

    $i = 1;
    $s = 0;
    do {
        $s = $s + $i;
        $i++;
    } while ($i <= 10);
    echo $s;
    echo "<br>";

    $i = 3;
    $p = 1;
    do {
        $p = $p * $i ** 2;
        $i++;
    } while ($i <= 12);
    echo $p;

    //switch
    echo "<br>";
    $i = 5;
    switch ($i) {
        case 4:
            echo 4;
            break;
        case 5:
            echo 5;
            break;
        default:
            echo "\$i=$i";
    }

    echo "<br>";
    $i = 8;
    switch ($i) {
        case 0:
            echo "нуль";
            break;
        case 1:
            echo "один";
            break;
        case 2:
            echo "два";
            break;
        case 3:
            echo "три";
            break;
        case 4:
            echo "четыре";
            break;
        case 5:
            echo "пять";
            break;
        case 6:
            echo "шесть";
            break;
        default:
            echo "такого числа нет";
    }


    //Написать скрипт рассчитывающую Сумму на банковском вкладе через заданное количество месяцев. Входные данные:
    //•	Начальная сумма вклада 2000
    //•	Количество месяцев 14
    //•	Годовая процентная ставка 11.5

    //DZ
    $cash = 2000;
    $percent = 11.5;
  

    for ($month = 1; $month <= 14; $month++) {
        $cash = $cash + (($cash * ($persent / 12) / 100));
    }

    echo "$cash";























    ?>
</body>

</html>