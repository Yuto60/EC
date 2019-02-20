<!doctype html>
<html lang="ja">
<?php

$cat_num=$_POST["cat_num"];
$db=new PDO("mysql:host=localhost;dbname=product","root","root");

$cat=$db->query("SELECT * FROM category WHERE num=$cat_num ");
$ca=$cat->fetch();
?>


<!------ヘッド-------->
    <head>
    <meta harset="tf-8">
        <title>ECサイト　<?php print "$ca[name]";?></title>
    <meta name="keywords" content="ネットショッピング,EC,<?php print "$ca[name]";?>>

        <meta name="description" content="ネットショッピングサイトの<?php print "$ca[name]";?>ページ">
		<link rel="stylesheet"
			  href="css/style1.css">
    </head>

<body>
	<!----ヘッダー----->
	<header id="top">
	<h1><a href="top.php">ECサイト</a></h1>
	</header>
	<!-----/ヘッダー----->
	<!-----メイン------>
	<main>
	<!------メインビジュアル------>
		<div id="main_visual">

		<h2><?php print "$ca[name]";?></h2>
		</div>

		<!-------/メインビジュアル------>

		<ul>
      <?php



      $production=$db->query("SELECT * FROM product WHERE cat=$cat_num");
   while($r=$production->fetch()){

      print "<form action='product.php' method='POST'>
        <input type='hidden' name='prod_num' value='$r[num]'>
      <li> <img src='$r[pic_add]' > <input type='submit' value='$r[name]'></li> </form>";

}

  ?>

    </ul>

		<p class="page_top"><a href="#top">ページトップ</a></p>
	</main>
	<!--------/メイン------->

	<!--------フッター------>
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
