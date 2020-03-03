<?php
function bbCode($text)
{
    $text = htmlspecialchars($_POST['text']);
    $pat = ['/\[b\](.*)\[\/b\]/i', '/\[i\](.*)\[\/i\]/i', '/\[u]\(.*)\[\/u\]/i'];
    $rep = ['<b>$1</b>', '<i>$1</i>', '<u>$1</u>'];
    $text = preg_replace($pat, $rep, $text);
    return $text;
}
?>
