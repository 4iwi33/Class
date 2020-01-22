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
    #echo "Hello world";

    /*$a=3;
    $b=4;
    $c=$a+$b;
    echo $c;

    echo'<br>';

    $a='1';
    $b=2;
    $c=$a.$b;
    echo $c;

    echo'<br>';

    $a=($b=4)+5;
    echo$a;

    echo'<br>';

    $a=+5;
    echo$a;

    echo'<br>';
    $b="Привет";
    $b.="Всем";
    echo$b;

    echo'<br>';
    echo('2'===2)*1;
    echo'<br>';
    echo('1'==1)*1;

    echo'<br>';
    $a=1;
    */





    /*$a = 5;
    $c = $a << 1;
    echo $c;
    echo'<br>';
    
    $b = 3;
    $d = ~$b;
    echo $d;
    */

    $bool = true;
    $str = "foo";
    $int = 12;
    echo gettype($bool);
    echo gettype($str);

    if (is_int($int)) {
        $int += 4;
    }
    if (is_string($bool)) {
        echo "Строка: $bool";
    }
    ?>
</body>
</html>