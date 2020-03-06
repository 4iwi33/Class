<?php
$s = $_POST['adress'];
$p = $_POST['name'];
$tut = file_get_contents($s);

echo preg_match_all("/" . $p . "/iu", $tut);
//https://ru.wikipedia.org/wiki/%D0%92%D0%B8%D1%82%D0%B5%D0%B1%D1%81%D0%BA
?>
