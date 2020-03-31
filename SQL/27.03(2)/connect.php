<?php
$link = mysqli_connect("localhost", "root", "")
or die(" conection with server not complete");

mysqli_select_db($link, "gost")
or die("Не удалось выбрать БД");
