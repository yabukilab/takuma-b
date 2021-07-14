<?php
    ini_set('display_errors',1);
    error_reporting(E_ALL);
    session_start(); 
    $pdo = new PDO('mysql:host=localhost; dbname=mydb; charset=utf8','testuser','pass');
    $name = $_POST['name'];//ユーザーから受け取った値を変数に入れる
   
    $email = $_POST['email'];
    $stmt = $pdo -> prepare("INSERT INTO product(name, email) VALUES(:name, :email)");//登録準備

    $stmt -> bindValue(':name', $name, PDO::PARAM_STR);//登録する文字の型を固定
    $stmt -> bindValue(':email', $email, PDO::PARAM_STR);//登録する文字の型を固定
    $stmt -> execute();//データベースの登録を実行
    $pdo = NULL;//データベース接続を解除
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品登録完了画面</title>
</head>
<body>
    
    <form action="index.php">

 <input type='submit' value="完了" >
</form>  
</body>
</html>
