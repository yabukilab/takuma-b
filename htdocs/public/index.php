<?php 

session_start();

require_once './classes/UserLogic.php';
require_once '../functions.php';

//　ログインしているか判定し、していなかったら新規登録画面へ返す
$result = UserLogic::checkLogin();

if (!$result) {
  $_SESSION['login_err'] = 'ログインしてください！';
  header('Location: login_form.php');
  return;
}

$login_user = $_SESSION['login_user'];

	if(isset($POST['logout'])){
		UserLogic::logout();
	}elseif(isset($_GET['search'])){
		$PData;		
	}


//①データ取得ロジックを呼び出す
include_once('model.php');

$PData = getUserData($_GET);



?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1">
<title>PHPの検索機能</title>
<link rel="stylesheet" href="style.css">
<!-- Bootstrap読み込み（スタイリングのため） -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<!--CSSを読み込むファイルのhead内に記述-->
<link rel="stylesheet" href="css.php">
</head>
<body>
<h2>メルカド</h2>

<div id="link">
　　<form  method="POST" action="logout.php">
    <input type="submit" name="logout" value="ログアウト"> 
    <p><a href="./shuppin.php">出品はこちら</a></p>
   </form>
</div>

<div class="col-xs-6 col-xs-offset-3 well">

	<?php //②フリマアプリ ?>
	<form method="get" action="">
		<div class="form-group">
			<label for="InputName">商品名</label>
			<input name="name" class="form-control" id="InputName" value="<?php echo isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '' ?>">
			
		</div>
		
		<input type="submit" class="btn btn-default" name="search" value="検索"/>
	</form>

</div>
<div class="col-xs-6 col-xs-offset-3">
	<?php //③取得データを表示する ?>
	<?php if(isset($PData) && count($PData)): ?>
	
		
		<p class="alert alert-success"><?php echo count($PData) ?>件見つかりました。</p>
		<table class="table">
			<thead>
				<tr>
					<th>商品名</th>
					<th>メールアドレス</th>
					
				</tr>
			</thead>
			<tbody>
				<?php foreach($PData as $row): ?>
					<tr>
						<td><?php echo htmlspecialchars($row['name']) ?></td>
						<td><?php echo htmlspecialchars($row['email']) ?></td>
						
						
					</tr>
				<?php endforeach; ?>
				
	
			</tbody>
		</table>
	<?php else: ?>
		<p class="alert alert-danger">検索対象は見つかりませんでした。</p>
	<?php endif; ?>

</div>

</body>
</html>