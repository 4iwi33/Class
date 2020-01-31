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
    //print_r($arr);
    $buf = explode(" - ", $arr[$ind]);
    $buf[1] += 1;
    $arr[$ind] = implode(" - ", $buf);
    print_r($arr);
    file_put_contents("new1.csv", $arr);
    ?>
</body>

</html>