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

    ];

    $arrRep = [
        "<img src='$0'>"

    ];

    return preg_replace($arrPat, $arrRep, $img);
}

?>