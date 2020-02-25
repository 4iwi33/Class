<?php
unlink('dowlands\\'.$_GET['name']);
header("Location: show.php");
