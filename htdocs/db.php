<?php



function connect()
{
$dbServer = '127.0.0.1';
$dbUser = isset($_SERVER['MYSQL_USER'])     ? $_SERVER['MYSQL_USER']     : 'testuser';
$dbPass = isset($_SERVER['MYSQL_PASSWORD']) ? $_SERVER['MYSQL_PASSWORD'] : 'pass';
$dbName = isset($_SERVER['MYSQL_DB'])       ? $_SERVER['MYSQL_DB']       : 'mydb';

$dsn = "mysql:host={$dbServer};dbname={$dbName};charset=utf8mb4";

try {
  $pdo = new PDO($dsn, $dbUser, $dbPass);
  # プリペアドステートメントのエミュレーションを無効にする．
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  # エラー→例外
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  return $pdo;
} catch (PDOException $e) {
  echo "Can't connect to the database: " . h($e->getMessage());
  exit();
}
}

