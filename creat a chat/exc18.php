<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="1">
    <link href="style.css">

    <title>exc18</title>
</head>

<body>
   
    <?
    $mess_arr = file("file1.txt");

    foreach ($mess_arr as $value) {
        echo "$value<br>";
    }
    ?>
</body>

</html>