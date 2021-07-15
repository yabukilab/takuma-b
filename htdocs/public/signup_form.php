<?php
session_start();

require_once '../functions.php';
require_once './classes//UserLogic.php';

$result = UserLogic::checkLogin();
if($result) {
  header('Location:login_form.php');
  return;
}

$login_err = isset($_SESSION['login_err']) ? $_SESSION['login_err'] : null;
unset($_SESSION['login_err']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href=style.css>
  <title>ユーザ登録画面</title>
</head>
<body>
<h2 id="signup">ユーザ登録フォーム</h2>

<?php if (isset($login_err)) : ?>
    <p id="error"><?php echo $login_err; ?></p>
<?php endif; ?>

  <form action="register.php" method="POST">
  <div id="form">  
  <p>
    <label for="username">ユーザ名</label>
    <input type="text" name="username" size="60" required>
  </p>
  <p>
    <label for="email">メールアドレス</label>
    <input type="email" name="email" size="60" required>
  </p>
  <p>
    <label for="password">パスワード</label>
    <input type="password" name="password" size="60"required>
  </p>
  <p>
    <label for="password_conf">パスワード確認</label>
    <input type="password" name="password_conf" size="60" required>
  </p>
  <input type="hidden" name="csrf_token" value="<?php echo h(setToken()); ?>">
  <p>
    <input class="button" type="submit" value="新規登録">
  </p>
  <p><a href= 'login_form.php'>ログインページ</p>
  
  </form>
  
</div>
</body>
</html>
    