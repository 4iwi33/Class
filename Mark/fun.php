<?php
function cens($text)
{
    $pat = "/bad|word/";
    if (preg_match($pat, $text)) {
        return "Don't say bad word!";
    } else {
        return $text;
    }
}

function markdown($text)
{
    $pat = [
        '/\*\*(.*?)\*\*/',
        '/\*(.*?)\*/',
        '/\~\~(.*?)\~\~/'
    ];

    $ret = [
        "<b>$1</b>",
        "<i>$1</i>",
        "<u>$1</u>"
    ];
    return preg_replace($pat, $ret, $text);
}
