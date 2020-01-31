<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>opros</title>
</head>

<body>
    <?php
    $i = $_POST['s'];
   
    $arr = explode(';', file_get_contents('opros.csv'));
    $arr[$i]++;
    file_put_contents('opros.csv', implode(";", $arr));

    foreach($arr as $key=>$value){
        echo "$key - $value<br>";
    }
    ?>
</body>

</html>