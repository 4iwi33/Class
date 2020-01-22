<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>less13</title>
</head>

<body>
    <?php
    //change site
    $handle = fopen("hhtps://www.php.net/", "r");
    $contents = '';
    while (!feof($handle)) {
        $contents .= fread($handle, 1);
    }
    fclose($handle);
    echo $contents;




    ?>
</body>

</html>