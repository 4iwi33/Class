<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show</title>
</head>

<body>
    <?php
    include("fun.php");

    echo url(md(htmlspecialchars($_POST['smile'])));

    ?>
</body>

</html>