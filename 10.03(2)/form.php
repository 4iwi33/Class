<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <?php
    include("function.php");

    $text = save_guets_book("seccond.xml", $f);
    foreach ($text as $value) {
        echo '' . $value["msg"] . '<br>' . $value["name"] . '<br>' . $value["date"] . '<br>';
    }


    ?>
    <form action="first.php" method="post">
        <textarea name="msg" cols="30" rows="10"></textarea><br>
        <input type="text" name="name"><br>
        <input type="submit" value="ok">
    </form>
</body>

</html>