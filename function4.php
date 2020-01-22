<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php

    $a = 5;
    $b = 7;
    $i = 9;
    $f = 12;
    function number($a, $b, $i, $f)
    {
        if ($a > $b) { //вывести большее через функц
            $c = $a;
        } else {
            $c = $b;
        }

        if ($b > $i) {
            $z = $b;
        } else {
            $z = $i;
        }
        if ($i > $f) {
            $j = $i;
        } else {
            $j = $f;
            return $j;
        }
    }
    echo max($a, $b, $i, $f);


    ?>
</body>

</html>