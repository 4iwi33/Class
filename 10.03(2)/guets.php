<?php
include ("function.php");
save_guets_book($_POST['msg'], $_POST['name'], date('d-m-Y H:i:s'));
echo mass("seccond.xml");
?>