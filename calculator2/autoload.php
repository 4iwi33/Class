<?php
//автозагрузка
// "spl_autoload_register" — Регистрирует заданную функцию в качестве реализации метода __autoload()

    spl_autoload_register(function($class_name)
    {
        include $class_name . '.php';
    });
