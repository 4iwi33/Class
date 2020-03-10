<?php
function save_guets_book($text, $name, $date)
{
    $str = <<<XML
    \n<msg>
        <text>$text</text>
        <name>$name</name>
        <date>$date</date>
    </msg>
XML;
    return file_put_contents("seccond.xml", $str, FILE_APPEND);
}

function mass($f)
{

    return preg_match_all(
        '/<msg>.*?<text>(.*?)<\/text>.*?<name>(.*?)<\/name>.*?<date>(.*?)<\/date>.*?<\/msg>/ius',
        file_get_contents($f),
        $matches

    );

    $arr = [];
    foreach ($matches[1] as $key => $value) {
        $arr[$key]['msg'] = $value;
        $arr[$key]['name'] = $matches[2][$key];
        $arr[$key]['date'] = $matches[3][$key];
    }
    return $arr;
}
?>