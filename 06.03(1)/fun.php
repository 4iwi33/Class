<?php
function md($text)
{
    $arrPat = [
        '/\*\*(.*?)\*\*/',
        '/\*(.*?)\*/',
    ];

    $arrRep = [
        "<b>$1</b>",
        "<i>$1</i>"
    ];

    return preg_replace($arrPat, $arrRep, $text);
}

function url($img)
{
    $arrPat = [
        '/https\:\/\/.*\.jpg|png|gif/i',
            //https://www.apicius.es/wp-content/uploads/2012/07/IMG-20120714-009211.jpg для проверки отправь эту картинку
    ];

    $arrRep = [
        "<img src='$0'>"

    ];

    return preg_replace($arrPat, $arrRep, $img);
}
