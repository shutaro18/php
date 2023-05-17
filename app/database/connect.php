<?php

$user = "root";
$pass = "root";

//DBと接続する

try {
    $pdo = new PDO('mysql:host=localhost;dbname=2chan-bbs', $user, $pass);
    //echo "接続成功";
} catch (PDOException $e) {
    echo "接続失敗" . $e->getMessage();
    exit();
}