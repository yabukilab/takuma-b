<?php
    ini_set('display_errors',1);
    error_reporting(E_ALL);
    session_start(); 

    require_once '../db.php';

	$dbServer = '127.0.0.1';
    $dbUser = isset($_SERVER['MYSQL_USER'])     ? $_SERVER['MYSQL_USER']     : 'testuser';
    $dbPass = isset($_SERVER['MYSQL_PASSWORD']) ? $_SERVER['MYSQL_PASSWORD'] : 'pass';
    $dbName = isset($_SERVER['MYSQL_DB'])       ? $_SERVER['MYSQL_DB']       : 'mydb';

    $dsn = "mysql:host={$dbServer};dbname={$dbName};charset=utf8mb4";
   
    $pdo = new PDO($dsn, $dbUser, $dbPass);
   
    $name = $_POST['name'];//ユーザーから受け取った値を変数に入れる
   
    $email = $_POST['email'];
    
    $stmt = $pdo -> prepare("INSERT INTO product(name, email) VALUES(?, ?)");//登録準備
    $stmt -> bindValue(':name', $name, PDO::PARAM_STR);//登録する文字の型を固定
    $stmt -> bindValue(':email', $email, PDO::PARAM_STR);//登録する文字の型を固定
    $stmt -> execute();//データベースの登録を実行
    
   header("Location: index.php");
    
    $pdo = NULL;//データベース接続を解除
?>


