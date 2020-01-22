<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>less14</title>
</head>

<body>
    <?php

    //file — Читает содержимое файла и помещает
    // его в массив
    $fp = fopen("file4.txt", "w+");
    fwrite($fp, "Test");
    fclose($fp);

    $w = file("file4.txt");
    print_r($w);




    ?>
</body>

</html>