<?php 

    require_once __DIR__ . "/../Config/Database.php";

    $db = \Config\Database::getConnection();
    echo "Sukses membuat koneksi ke database" . PHP_EOL;