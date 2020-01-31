<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>new</title>
</head>

<body>
    <?php
    $ind = $_POST['vot'];
    $arr = file("new1.csv");
    $buf = explode(" - ", $arr[$ind]);
    $buf[1] += 1;
    $arr[$ind] = implode(" - ", $buf) . "\n";
    file_put_contents("new1.csv", $arr);
    foreach ($arr as $value) {
        echo "$value<br>";
    }
    ?>
</body>

</html>