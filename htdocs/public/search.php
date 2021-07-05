<?php 

//①データ取得ロジックを呼び出す
include_once('model.php');

$productData = getUserData($_GET);

?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHPの検索機能</title>
<link rel="stylesheet" href="style.css">
<!-- Bootstrap読み込み（スタイリングのため） -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
</head>
<body>
<h1 class="col-xs-6 col-xs-offset-3">検索フォーム</h1>
<div class="col-xs-6 col-xs-offset-3 well">

	<?php //②検索フォーム ?>
	<form method="get">
		<div class="form-group">
			<label for="InputName">名前</label>
			<input name="name" class="form-control" id="InputName" value="<?php echo isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '' ?>">
		</div>
		
		<button type="submit" class="btn btn-default" name="search">検索</button>
	</form>

</div>
<div class="col-xs-6 col-xs-offset-3">
	<?php //③取得データを表示する ?>
	<?php if(isset($productData) && count($productData)): ?>
		<p class="alert alert-success"><?php echo count($productData) ?>件見つかりました。</p>
		<table class="table">
			<thead>
				<tr>
					<th>名前</th>
					<th>性別</th>
					<th>年齢</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($productData as $row): ?>
					<tr>
						<td><?php echo htmlspecialchars($row['name']) ?></td>
						<td><?php echo htmlspecialchars($row['freeans']) ?></td>
						
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
© 2021 GitHub, Inc.