<?php
$message = null;

for ($i = 0; $i < count($_FILES['inputFile']['name']); $i++) {
    $filename = $_FILES['inputFile']['name'][$i];

    if (move_uploaded_file($_FILES['inputFile']['tmp_name'][$i], "uploads/$filename")) {
        $message = "Upload complete.";
    } else {
        $message = "Upload Failed.";
    }
}

return print ($message);