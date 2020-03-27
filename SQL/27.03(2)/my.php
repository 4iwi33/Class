<?php
include('connect.php');

$query = "SELECT * FROM gosttable";
$result = mysqli_query($link, $query)
    or die("Не удалось выполнить запрос");

echo "<table border='1'>\n";
while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
    echo "<tr>";
    echo "<td>" . $row[0] . "</td>";
    echo "<td>" . $row[1] . "</td>";
    echo "<td>" . $row[2] . "</td>";
    echo "</tr>";
}

echo "</table>\n";

mysqli_free_result($result);

mysqli_close($link);
?>
<form action="add.php" method="POST">
    <textarea name="text" cols="30" rows="10"></textarea><br>
    <input type="text" name="name"><br>
    <input type="submit" value="ok">

</form>