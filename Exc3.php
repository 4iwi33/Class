<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exc3</title>
</head>
<body>
    <?php
    //Написать функцию принимающую на вход массив чисел произвольной длинны. 
    //В результате работы функция должна возвращать наибольшее значение из массива.
    
$array = array(10, 21, 32, 44, 65, 26);

function numb($array) {
    for($i = 1; $i<= count($array); $i++) {
        if ($array[$i] > $max ) {
            $max = $array[$i];
        }
    }
    return $max;
}

echo numb($array);
    
    //2

    function max($arr)
    {
        reset($arr);
        $max = current($arr);
        foreach ($arr as $v) {
            if ($v > $max)
            $max = $v;
        }
        return $max;

    }
    echo maxx 
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>