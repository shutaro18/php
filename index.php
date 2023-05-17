<?php

include_once("./app/database/connect.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>掲示板</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <!-- ヘッダー -->
    <?php include("./app/parts/header.php"); ?>

    <!-- バリデーションエラー表示 -->
    <?php include("./app/parts/validation.php"); ?>

    <!-- スレッドエリア　-->
    <?php include("./app/parts/thread.php"); ?>

    <!-- 新規スレッド書き込みボタン -->
    <?php include("./app/parts/newThreadButton.php"); ?>
</body>

</html>