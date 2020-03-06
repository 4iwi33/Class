<?php
include 'fun.php';

echo markdown("**loremlorem**,*words*");
echo "<hr>";
echo markdown("~~dddddddd~~,*aaaa*");
echo "<hr>";
echo markdown("~~ffffffffff~~,*aaaa*");
echo "<hr>";
echo markdown($_POST['send']);

?>