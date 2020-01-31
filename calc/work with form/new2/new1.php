<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>new1</title>
</head>

<body>
    <form action="new1,1.php" method="post">
        <?php
        $arr = file("new1.csv");
        ?>
        <h1><?= $arr[0] ?></h1>

        <?
        for ($i = 1; $i < count($arr); $i++) {
            $buf = explode(" - ", $arr[$i])[0];
            echo "<label><input type='radio' name='vot' value='$i'>$buf</label><br>\n";
        }
        ?>
        <input type="submit" value="OK">
    </form>

</body>

</html>