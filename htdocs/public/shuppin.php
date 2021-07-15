<?php 
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();

require_once './classes/UserLogic.php';
require_once '../db.php';





if(isset($_POST['datapost'])){
 $_SESSION['name'] = $_POST['name']; header('Location: regist.php'); 
 
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
            <p><a href="./index.php">検索画面に戻る</a></p>
       </form>
    
    
       
       



    </body>
</html>