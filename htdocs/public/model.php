<?php

function getUserData($params){
	//DBの接続情報
	require_once '../db.php';

	$host = DB_HOST;
    $db   = DB_NAME;
    $user = DB_USER;
    $pass = DB_PASS;

    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

	//DBコネクタを生成
	$Mysqli = new mysqli($host, $user, $pass, $db);
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