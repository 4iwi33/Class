<?php
$link = mysqli_connect("localhost", "root","")
or die (" conection with server not complete");

mysqli_select_db($link, "gost" )
or die ("Не удалось выбрать БД");

$query = "SELECT * FROM gosttable";
$result = mysqli_query ($link,$query)
or die ("Не удалось выполнить запрос");

echo "<table border='1'>\n";
while ($row = mysqli_fetch_array($result,MYSQLI_BOTH)) {
    echo"<tr>";
    echo"<td>".$row[0]."</td>";
    echo"<td>".$row[1]."</td>"; 
    echo"<td>".$row[2]."</td>"; 
    echo"</tr>";
}

echo "</table>\n";
mysqli_free_result($result);
mysqli_close($link);




?>