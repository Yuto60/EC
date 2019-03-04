<!doctype html>
<html lang="ja">

<!-------ヘッド------>
<?php
$prod_num=$_POST["prod_num"];
$db=new PDO("mysql:host=localhost;dbname=product","root","root");
$production=$db->query("SELECT * FROM product WHERE num=$prod_num");
$r=$production->fetch();
$category=$db->query("SELECT * FROM category WHERE num=$r[cat]");
$c=$category->fetch();
?>

	<head>
	<meta harset="tf-8">
		<title>ECサイト <?php print "$r[name]"; ?></title>
	<meta name="keywords"
 content="ネットショッピング,EC,<?php print "$c[name],";  print "$r[name]"; ?>">

		<meta name="description" content="ネットショッピングサイトの<?php print "$r[name]"; ?>ページ">

		<link rel="stylesheet" href="css/style1.css">
	</head>

	<body>
	<!------ヘッダー------>
		<header id="top">
		<h1><a href="top.php">ECサイト</a></h1>
		</header>
	<!-------/ヘッダー------->
		<!--------メイン------->
		<main>
		<!--------メインビジュアル------>
			<div id="main_visual">
			<h2><?php print "$r[name]";?></h2>

				<img src="<?php print "$r[pic_add]";?>"
					 >

				<img src="<?php print "$r[pic_add2]";?>" >

				<img src="<?php print "$r[pic_add3]";?>">

				<img src="<?php print "$r[pic_add4]";?>">

				<img src="<?php print "$r[pic_add5]";?>">

				<h2>￥<?php print "$r[nedan]"; ?></h2>

</div>
			<!--------/メインビジュアル----->

			<h3>商品紹介</h3>
			<p><?php print "$r[shoukai]"; ?> </p>


             <form action="tetsuzuki.php" method="post">


			<input type="hidden" name="prod_num" value="<?php print"$prod_num";?>">

				  <input type="submit" value="購入する">
			</form>

			<p class="page_top"><a href="#top">ページトップ</a></p>

		</main>
		<!-------/メイン------->
		<!-------フッター------>
		<footer>
	<nav>
		<ul>
			<?php
$category=$db->query("SELECT * FROM category ");
while($c=$category->fetch()){
print "<li>  <form action='category.php' method='POST'>
<input type='hidden' name='cat_num' value='$c[num]'>
<input  type='submit' value='$c[name]' class='footer_button'></form></li>";
}
?>
		</ul>


		</nav>
	</footer>


	</body>

</html>
