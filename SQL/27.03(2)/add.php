<?php
include('connect.php');

if (!empty($_POST['text'] && !empty($_POST['name']))) {
    $sql = "INSERT INTO gosttable VALUES(NULL, '$_POST[text]', '$_POST[name]')";
    mysqli_query(
        $link,
        $sql
    );
    header('Location: my.php');
}
