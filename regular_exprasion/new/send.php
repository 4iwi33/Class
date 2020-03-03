<?php
$pat= ['/\[b](.*)\[\/b\]/i','/\[i\](.*)\[\/i\]/i','/\[u\](.*)\[\/u\]/i'];
$rep = ['<i>$1</i>','<b>$1</b>','<u>$1</u>'];
$str = htmlspecialchars($_POST['mail']);
$str2 = preg_replace($pat, $rep, $str);
echo "<pre>$str2</pre>";
?>
