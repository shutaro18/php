<?php

include_once("./app/database/connect.php");

//バリデーション
include("app/functions/comment_add.php");

//コメントデータをテーブルから取得してくる
include("app/functions/comment_get.php");


?>
    <!-- スレッドエリア　-->
    <div class="threadWrapper">
        <div class="childWrapper">
            <div class="threadTitle">
                <span>[タイトル]</span>
                <h1>掲示板作ってみた</h1>
            </div>
            <?php include("commentSection.php"); ?>
            <?php include("commentForm.php"); ?>
        </div>
    </div>