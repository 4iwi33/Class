<?php
rename('dowlands//'.$_POST['oldname'], 'dowlands//'. $_POST['name']);
// print_r($_POST);
header("Location: show.php");
