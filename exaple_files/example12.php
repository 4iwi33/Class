<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>less12</title>
</head>

<body>
    <?php
    //Работa с файловой системой
    //fopen — Открывает файл или URL
    $fp = fopen("file1.txt", "w+");
    fwrite($fp, "Test");
    fclose($fp);

    rename("file1.txt", "file2.txt");

    //is_file
    if (is_file('file2.txt')) {
        echo "true";
    } else {
        echo "false";
    }

    //is_dir
    if (is_dir('C:\\ospanel\\domains\\Kuncevich\\Home')) {
        echo "true";
    } else {
        echo "false";
    }

    //unlink удаление файла
    //unlink('file2.txt');



    ?>
</body>

</html>