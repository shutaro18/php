<?php

include_once("../database/connect.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規スレッド作成ページ</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body>
    <!-- ヘッダー -->
    <?php include("../../app/parts/header.php"); ?>

    <!-- バリデーションエラー表示 -->
    <?php include("../../app/parts/validation.php"); ?>

    <!-- スレッド作成フォーム -->
    <div>
        <h2>新規作成スレッド立ち上げ</h2>
    </div>
    <form method="POST" class="formWrapper">
        <div>
            <label>スレッド名</label>
            <input type="text" name="title" placeholder="スレッド名を入力してください">

            <label>名前</label>
            <input type="text" name="username">

        </div>

        <div>
            <textarea name="body" class="commentTextArea"></textarea>
        </div>
        <input type="submit" value="立ち上げ" name="threadSubmitButton">
    </form>

</body>

</html>