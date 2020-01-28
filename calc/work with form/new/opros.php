<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>opros</title>
</head>

<body>
    <?php
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $s = $_POST['num3'];
    echo "$a";
    echo "<br>";
    echo "$b";
    echo "<br>";
    file_put_contents('opros.txt', "$a ; $b" . "\n", FILE_APPEND);
    ?>
</body>

</html>