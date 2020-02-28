<?php
if (is_uploaded_file($_FILES['file'][''])) {
    copy($_FILES['file'][''], "file\\" . $_FILES['file']['']);
}

header("Location: show.php");
