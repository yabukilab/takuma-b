<?php
require_once 'env.php';

function connect()
{
    $host = '127.0.0.1';
    $db   = isset($_SERVER['DB_NAME']) ? $_SERVER['DB_NAME']: 'user';
    $user = isset($_SERVER['DB_USER']) ? $_SERVER['DB_USER']: 'kou';
    $pass = isset($_SERVER['DB_PASS']) ? $_SERVER['DB_PASS']: 'fur1map@ss';

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




