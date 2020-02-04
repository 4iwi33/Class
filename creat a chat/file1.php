<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>file1</title>
</head>

<body>
    <form action="?" method="post">
        <input type="text" value="<?= $_POST["UserName"] ?>" name="UserName"><br>
        <input type="submit" value="mess">

        <input class="submit" type="submit" value="ok">
    </form>

    <? // meta refresh
    if (!empty($_POST['mess'])) {
        file_put_contents("file1.txt", $_POST['UserName'] . ":" . $_POST['mess'] . "\n", FILE_APPEND);
    }
    ?>
</body>

</html>