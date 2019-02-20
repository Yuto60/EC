<!docktype html>
<html lang="ja">

<!-------ヘッド------->

	<head>
	<meta harset="tf-8">
		<title>ECサイト 注文</title>
	<link rel="stylesheet"
		  href="css/style1.css">
		</head>

	<body>
	<!--------ヘッダー------>

	<header id="top">
		<h1><a href="top.php">ECサイト</a></h1>
		</header>
	<!-----------/ヘッダー---------->

		<!----------メイン----------->
		<main>
		<!-------------メインビジュアル-------->
			<div id="main_visual">
<?php

$prod_num=$_POST["prod_num"];

$db=new PDO("mysql:host=localhost;dbname=product","root","root");
$production=$db->query("SELECT * FROM product WHERE num=$prod_num");
$r=$production->fetch();

			print "<h1>{$r["name"]}</h1>";
?>
<form action="kounyu.php" method="post">

<div><input type="hidden" name="prod_num" value="<?php echo $prod_num;?>"></div>



					名前
					<div><input type="text" name="n"></div>

					郵便番号
					<div><input type="int" name="addn" ></div>

		           住所
					<div><input type="text" name="add"> </div>

				メールアドレス
					<div><input type="email" name="mail"></div>

					電話番号
					<div><input type="tel" name="tel"></div>

					部数
					<div><select name="busuu">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						</select></div>

					<input type="submit" value="確定">
				</form>

			</div>
