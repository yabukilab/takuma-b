<?php


function connect()
{
    $dbServer = '127.0.0.1';
    $db   = isset($_SERVER['MYSQL_DB'])       ? $_SERVER['MYSQL_DB']       : 'mydb';
    $user = isset($_SERVER['MYSQL_USER'])     ? $_SERVER['MYSQL_USER']     : 'kou';
    $pass = isset($_SERVER['MYSQL_PASSWORD']) ? $_SERVER['MYSQL_PASSWORD'] : 'furimapass';

    $dsn = "mysql:host={$dbServer};dbname={$db};charset=utf8";

    try {
        $pdo = new PDO($dsn, $user, $pass);
        
    # プリペアドステートメントのエミュレーションを無効にする．
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    # エラー→例外
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
    } catch(PDOExeption $e) {
        echo '接続失敗です！'. $e->getMessage();
    }


}



   