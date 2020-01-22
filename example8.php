<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>new8</title>
</head>

<body>
    <?php
    //использование значений по умолчанию 
    //в определении функции
    function makecoffe($type = "cappuccino")
    {
        return "Making a cup of $type.\n";
    }
    echo makecoffe();
    echo "<br>";
    echo makecoffe("espresso");
    ?>
</body>

</html>