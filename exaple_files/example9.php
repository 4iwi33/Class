<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>new9</title>
</head>

<body>
    <?php
    //Область видимости переменной 
    $a = 1; //глобальная область видимости
    function Test()
    {
        //сылка на переменную локальной области
    }
    Test();
    echo $a;
    ?>
</body>

</html>