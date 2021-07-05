<?php 
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();

require_once './classes/UserLogic.php';
require_once '../functions.php';

//　ログインしているか判定し、していなかったら新規登録画面へ返す
$result = UserLogic::checkLogin();

if (!$result) {
  $_SESSION['login_err'] = 'ユーザを登録してログインしてください！';
  header('Location: signup_form.php');
  return;
}

$login_user = $_SESSION['login_user'];


if(isset($_POST['datapost'])){
 $_SESSION['name'] = $_POST['name']; header('Location: regist.php'); 
 $_SESSION['freeans'] = $_POST['freeans']; header('Location: regist.php');
 $_SESSION['email'] = $_POST['email']; header('Location: regist.php');
}
?>


<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>出品ページ</title>
    </head>
    <body>

    
      
    
      <h2>出品ページ</h2>    
      
      <div id="form">
      <label for="productname">商品名</label>
      <form action="regist.php" method="post">
            <input type="text" name="name" size="40"><br><br><br>

            <label for="productname">メールアドレス</label>
      <form action="regist.php" method="post">
            <input type="email" name="email" size="60"><br><br><br>      

            
            
     
            
            <input class="button" type="submit" name="datapost" value="登録">
            <p><a href="./index.php">トップページに戻る</a></p>
       </form>
    
    
       
       



    </body>
</html>