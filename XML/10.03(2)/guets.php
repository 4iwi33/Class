<?php
include ("function.php");
save_guets_book(htmlspecialchars($_POST['msg']), htmlspecialchars($_POST['name']), date('d-m-Y H:i:s'));
header('location: form.php');
?>
