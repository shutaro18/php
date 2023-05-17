<?php

$error_message = array();

if(isset($_POST["submitButton"])){

    //名前が入力されているかチェックする
    if(empty($_POST["username"])){
        $error_message["username"] = "名前を入力してください";
    }else {
        //エスケープ処理
        $escaped["username"] = htmlspecialchars($_POST["username"], ENT_QUOTES, "UTF-8");
    }

    //コメントが入力されているかチェックする
    if(empty($_POST["body"])){
        $error_message["body"] = "コメントを入力してください";
    }else{
        //エスケープ処理
        $escaped["body"] = htmlspecialchars($_POST["body"], ENT_QUOTES, "UTF-8");
    }

    //エラーがなければコメントを保存する
    if(empty($error_message)){
        $post_date = date("Y-m-d H:i:s");
         //DBと接続する
         try {
            $pdo = new PDO('mysql:host=localhost;dbname=2chan-bbs', $user, $pass);
            //echo "接続成功";
        } catch (PDOException $e) {
            echo "接続失敗" . $e->getMessage();
            exit();
        }

        //コメントをテーブルに保存する
        $sql = "INSERT INTO comment (username, body, post_date) VALUES (:username, :body, :post_date)";
        $statement = $pdo->prepare($sql);
        
        //値をセットする
            $statement->bindParam(":username", $escaped["username"], PDO::PARAM_STR);
            $statement->bindParam(":body", $escaped["body"], PDO::PARAM_STR);
            $statement->bindParam(":post_date", $post_date, PDO::PARAM_STR);
        
            //SQL文を実行する
            $statement->execute();
    }
       
}