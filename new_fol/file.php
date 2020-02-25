<?php
if (is_uploaded_file($_FILES[''][''])) {
    copy($_FILES[''][''], "file\\" . $_FILES['']['']);
}

header("Location: show.php");
