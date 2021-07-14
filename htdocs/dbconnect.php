<?php
require_once 'env.php';

function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
  }

    $host =DB_HOST;
    $db   = DB_NAME;
    $user = DB_USER;
    $pass = DB_PASS;

    $dsn = "mysql:host=$host;dbname=$db;charset=utf8";

    try {
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
           
    
    } catch(PDOExeption $e) {
        echo '接続失敗です！'. $e->getMessage();
        
    }







