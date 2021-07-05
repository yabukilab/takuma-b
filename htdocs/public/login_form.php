<?php
session_start();
require_once './classes/UserLogic.php';

$result = UserLogic::checkLogin();
if($result) {
  header('Location: index.php');
  return;
}




$err = $_SESSION;

$_SESSION = array();
session_destroy();



?>
<!DOCTYPE html>

<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>ログイン画面</title>
</head>

<body>
<h2 id="loginform">ログインフォーム</h2>
    <?php if (isset($err['msg'])) : ?>
        <p><?php echo $err['msg']; ?></p>
    <?php endif; ?>
  <div id="form">
    <form action="login.php" method="POST">
  <p>
    <label for="email">メールアドレス</label>
    <input type="email" name="email" size="65" >
    <?php if (isset($err['email'])) : ?>
        <p><?php echo $err['email']; ?></p>
    <?php endif; ?>
  </p>
 
  <p>
    <label for="password">パスワード</label>
    <input type="password" name="password" size="65">
    <?php if (isset($err['password'])) : ?>
        <p><?php echo $err['password']; ?></p>
    <?php endif; ?>
  </p>
 
  <p>
    <input class="button" type="submit" value="ログイン">
  </p>
  
  <p>
    <a href="signup_form.php">新規登録はこちら</a>
  </p>
   </form>
    </div>
</body>

</html>