<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $s = $_POST['mail'];
    $temp_plate = "/\[b\](.*)\[\/b\]/";
    $newcode = '<b>$1</b>';

    echo preg_replace($temp_plate, $newcode, $s);
    ?>

</body>

</html>