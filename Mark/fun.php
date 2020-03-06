<?php
// function bb_code($text)
// {
//     $pat = [
//         '/\[b\](.*)\[\/b\]/',
//         '/\[i\](.*)\[\/i\]/',
//         '/\[u\](.*)\[\/u\]/',
//         '/\[img\](.*)\[\/img\]/'
//     ];

//     $img = [
//         "<b>$1</b>",
//         "<i>$1</i>",
//         "<u>$1</u>"
//     ];

//     return preg_replace($pat, $img, $text);
// }

// function smile($text) {
//     $pat = [
//         '/(\:\-\))|(\:\))/',
//         '/(\:\-\()|(\:\()/'
//     ];

//     $img = [
//         "<img src='smile.png' height='15'>",
//         "<img src='evil.png'  height='15'>"

//     ];
//     return preg_replace($pat, $img, $text);
// }


//////////////////////////////////
// function cens($text)
// {
//     $pat = "/bad|word/";
//     if (preg_match($pat, $text)) {
//              "Don't say bad word!";
//     } else {
//         return $text;
//     }
// }

// function markdown($text)
// {
//     $pat = [
//         '/\*\*(.*?)\*\*/',
//         '/\*(.*?)\*/',
//         '/\~\~(.*?)\~\~/'
//     ];

//     $ret = [
//         "<b>$1</b>",
//         "<i>$1</i>",
//         "<u>$1</u>"
//     ];
//     return preg_replace($pat, $ret, $text);
//}

/////////////////////////////////////////

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

function erl($img)
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