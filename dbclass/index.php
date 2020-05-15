<?php

use  W1019\DbTable;

include "src/autoload.php";

$table = new DbTable(
    new mysqli(
        "localhost",
        "root",
        "root",
        "bd123"
    ),
    "table123"
);

print_r($table->get());

echo $table->add(["text" => "hello", "name" => "Nick"]);
echo  "<br>";
echo $table->add(["text" => "bue", "name" => "Mike"]);


