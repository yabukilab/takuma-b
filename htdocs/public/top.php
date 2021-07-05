<?php
require_once './classes/Userlogic.php';

session_start();

ini_set('display_errors', true);
//エラーメッセージ
$err = [];

//バリテーション
if(!$username = filter_input(INPUT_POST, 'email')){
    $err['email'] = 'ユーザ名を入力してください。';

}
if(!$password = filter_input(INPUT_POST, 'password'));
{
    $err['password'] = 'パスワードを入力してください。';  
}



if(count($err) > 0){
    //エラーがあった場合は戻す
    $_SESSION = $err;
    header('location: login.php' );
    return;
}
 
//ログイン成功時の処理  
　$result = UserLogic::login($email, $password);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザ登録画面</title>
</head>

<body>
    <?php if(count($err) > 0) :?>
      <?php foreach($err as $e) :?>
        <p><?php echo $e ?></p>
      <?php endforeach ?>
    <?php else : ?>     
     
<p>ユーザ登録が完了しました</p>
   
<?php endif ?>
    
<a href="./login.php">戻る</a>
</body>

</html>