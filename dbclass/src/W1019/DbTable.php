<?php

namespace W1019;

use mysqli;

class DbTable implements CRUDInterface
{
    private $mysqli;
    private $tableName;

    public function __construct(mysqli $mysqli, $tableName)
    {
        $this->mysqli = $mysqli;
        $this->tableName = $tableName;
    }

    public function get(): array
    {
        $result = $this->mysqli->query("SELECT * FROM $this->tableName;");

        $array = [];
        while ($row = $result->fetch_assoc()) {
            $array[] = $row;
        }
        return $array;
    }

    public function add(array $data): int
    {
        //INSERT INTO `table123` (`text`, `name` ) VALUES ("Hello", "Nick");
        $fildNames = [];
        foreach (array_keys($data) as $value) {
            $fildNames[] = $value;
        }
        $sql = "INSERT INTO  `$this->tableName` (`" . implode("`, `", $fildNames) . "`) VALUES ('" . implode("', '", $data) . "');";

        $this->mysqli->query($sql);

        return $this->mysqli->insert_id;
    }
}
