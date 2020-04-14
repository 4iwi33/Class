<pre>
<?php
function odd($var)
{
    return ($var % 2 == 1);
}

function even($var)
{
    return ($var % 2 == 0);
}

$array1 = array("a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5);
$array2 = array(6, 7, 8, 9, 10, 11, 12);

echo "Нечетные :\n";
print_r(array_filter($array1, "odd"));
echo "Четные   :\n";
print_r(array_filter($array2, "even"));
?>
</pre>