<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>new7</title>
</head>

<body>
    <?php
    //Передача аргументов по сылке
    function plus(&$string) //либо без &
    {
        $string .= ' + Петя';
    }
    $str = 'Ира';
    plus($str);
    echo $str;
    ?>
</body>

</html>