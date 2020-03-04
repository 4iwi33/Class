<?php
function bb_code($text)
{
    $pat = [
        '/\[b\](.*)\[\/b\]/',
        '/\[i\](.*)\[\/i\]/',
        '/\[u\](.*)\[\/u\]/'
    ];

    $img = [
        "<b>$1</b>",
        "<i>$1</i>",
        "<u>$1</u>"
    ];

    return preg_replace($pat, $img, $text);
}

function smile($text) {
    $pat = [
        '/(\:\-\))|(\:\))/',
        '/(\:\-\()|(\:\()/'
    ];

    $img = [
        "<img src='smile.png' height='15'>",
        "<img src='evil.png'  height='15'>"

    ];
    return preg_replace($pat, $img, $text);
}
?>