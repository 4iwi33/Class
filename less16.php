<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>less16</title>
</head>

<body>
    <?php
    //readfile — Выводит файл

    $fp = fopen("file3.txt", "w+");
    fwrite($fp, "Test");
    fclose($fp);

    readfile("file3.txt");





    ?>
</body>

</html>