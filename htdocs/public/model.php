<?php

function getUserData($params){
	//DBの接続情報
	require_once '../db.php';

	$dbServer = '127.0.0.1';
    $dbUser = isset($_SERVER['MYSQL_USER'])     ? $_SERVER['MYSQL_USER']     : 'testuser';
    $dbPass = isset($_SERVER['MYSQL_PASSWORD']) ? $_SERVER['MYSQL_PASSWORD'] : 'pass';
    $dbName = isset($_SERVER['MYSQL_DB'])       ? $_SERVER['MYSQL_DB']       : 'mydb';

    $dsn = "mysql:host={$dbServer};dbname={$dbName};charset=utf8";


	//DBコネクタを生成
	$Mysqli = new mysqli($dbServer, $dbUser, $dbPass, $dbName);
	if ($Mysqli->connect_error) {
			error_log($Mysqli->connect_error);
			exit;
	}

	//入力された検索条件からSQl文を生成
	$where = [];
	if(!empty($params['name'])){
		$where[] = "name like '%{$params['name']}%'";
	}
   
	
	if($where){
		$whereSql = implode(' AND ', $where);
		$sql = 'select * from product where ' . $whereSql ;
	}else{
		$sql = 'select * from product';
	}
	
	
	
	//SQL文を実行する
	$PDataSet = $Mysqli->query($sql);

	//扱いやすい形に変える
	$result = [];
	while($row = $PDataSet->fetch_assoc()){
		$result[] = $row;
	}
	return $result;
}