<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>new10</title>
</head>

<body>
    <?php
    //Область видимости переменной
    $a = 1;
    $b = 2;
    function sum()
    {
        global $a, $b;

        $b = $a + $b;
    }
    sum();
    echo $b;
    ?>
</body>

</html>