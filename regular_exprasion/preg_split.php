<?php
$str = 'hypertext3language5programming';
//preg_split — Разбивает строку по регулярному выражению
$chars = preg_split('/\d/', $str);
print_r($chars);
