<?php
//preg_match — Выполняет проверку на соответствие регулярному выражению
if (preg_match('/@/', 'vstu@mail.ru')) {
    echo 'yes';
} else {
    echo 'no';
}
