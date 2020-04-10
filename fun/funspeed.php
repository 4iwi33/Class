<?php
function speed_test($fun, $arg, $n=100000){
    $time1 = microtime(TRUE);
    for ($i=0; $i <$n; $i++) { 
        $fun($arg);
    } 
    $time2 = microtime(TRUE);

    return $time2 - $time1;

}
function my_sqrt($x){
    return pow($x, .5);
}

function sqrt2($x){
    return $x ** 0.5;
}


echo speed_test("sqrt", 20);
echo "<br>";
echo speed_test("my_sqrt", 20);
echo "<br>";
echo speed_test("sqrt2", 20);
?>