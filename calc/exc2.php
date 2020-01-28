<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exc2</title>
</head>

<body>
    <?php
    //print_r($_POST);

    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $s = $_POST['s'];

    switch ($_POST['s']) {
        case '-':
            $c = $a - $b;
            break;
        case '*':
            $c = $a * $b;
            break;
        case '/':
            $c = $a / $b;
            break;
        case '+':
        default:
            $c = $a + $b;
            break;
    }
    echo "$a $s $b = $c";
    $fp = fopen("new2.txt", "a+");
    fwrite($fp, $c . "\r\n");
    fclose($fp);
    ?>
</body>

</html>