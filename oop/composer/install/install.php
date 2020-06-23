<?php
require '../vendor/autoload.php';

use TexLab\MyDB\DbEntity;
use TexLab\MyDB\DB;

$link = DB::Link([
    'host' => 'localhost',
    'username' => 'root',
    'password' => 'root',
    'dbname' => 'guests_book'
]);

$sql = file_get_contents('guests_book.sql');

$array = explode(";", $sql);

foreach ($array as $value) {
    echo  $value;
}
