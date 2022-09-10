<?php
    $db = mysqli_connect("localhost", "root", "", "property");

    if (!$db) {
        echo "Database gagal terhubung";
    }
?>