<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form1</title>
</head>

<body>
    <?php
    $a = $_POST['num1'];
    $b = $_POST['num2'];

    echo "$a";
    echo "<br>";
    echo "$b";
    echo "<br>";
    file_put_contents('form1.csv', "$a ; $b" . "\n", FILE_APPEND);

    ?>
</body>

</html>