<?php
require_once 'env.php';

function connect()
{
    $host = '127.0.0.1';
    $db   = isset($_SERVER['MYSQL_DB']) ? $_SERVER['MYSQL_DB']: 'user';
    $user = isset($_SERVER['MYSQL_USER']) ? $_SERVER['MYSQL_USER']: 'kou';
    $pass = isset($_SERVER['MYSQL_PASSWORD']) ? $_SERVER['MYSQL_PASSWORD']: 'fur1map@ss';

    $dsn = "mysql:host={$host};dbname={$db};charset=utf8mb4";

    try {
        $pdo = new PDO($dsn, $user, $pass);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $pdo;
        
    } catch(PDOExeption $e) {
        echo '接続失敗です！'. $e->getMessage();
        exit();
    }


}




