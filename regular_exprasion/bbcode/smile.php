<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>smile</title>
</head>

<body>
    <?php
    $s = $_POST['mail']; //метод: post ключ:mail
    //                    [b\]     [\/b\] 
    $temp_plate = "/\[i\]\[b\](.*)\[\/b\]\[\/i\]/"; //постоянно экранипуемся
    $newcode = '<i><b>$1</b></i>';

    // temp_plate - что хотим изменить
    // $newcode - как хотм изменить (курсив и жирный)
    // $s - где хотим изменить
    echo preg_replace($temp_plate, $newcode, $s);
    ?>

</body>

</html>