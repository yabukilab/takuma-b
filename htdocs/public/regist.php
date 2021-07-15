<?php
    ini_set('display_errors',1);
    error_reporting(E_ALL);
    session_start(); 
   
    $pdo = new PDO('mysql:host=localhost; dbname=mydb; charset=utf8mb4','testuser','pass');
   
    $name = $_POST['name'];//ユーザーから受け取った値を変数に入れる
   
    $email = $_POST['email'];
    
    $stmt = $pdo -> prepare("INSERT INTO product(name, email) VALUES(:name, :email)");//登録準備
    $stmt -> bindValue(':name', $name, PDO::PARAM_STR);//登録する文字の型を固定
    $stmt -> bindValue(':email', $email, PDO::PARAM_STR);//登録する文字の型を固定
    $stmt -> execute();//データベースの登録を実行
    
   header("Location: index.php");
    
    $pdo = NULL;//データベース接続を解除
?>


