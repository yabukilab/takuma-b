<?php
require_once 'env.php';
require_once '../functions.php';

function connect()
{
    $host =DB_HOST;
    $db   = DB_NAME;
    $user = DB_USER;
    $pass = DB_PASS;

    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

    try {
        $pdo = new PDO($dsn, $user, $pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            
           ]);
           
        return $pdo;
    } catch(PDOExeption $e) {
        echo '接続失敗です！'. $e->getMessage();
        exit();
    }


}




