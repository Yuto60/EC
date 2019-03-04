<!doctype php>
<html lang="ja">

<!----------ヘッド----------->

	<head>
	<meta harset="tf-8">
		<tittle>注文確定</tittle>
	<link rel="stylesheet"
		  href="css/style1.css">

	</head>

<body>

	<!-----------ヘッダー-------->
		<header id="top">
	<h1>注文が確定しました</h1>
<?php
$prod_num=$_POST["prod_num"];
$db=new PDO("mysql:host=localhost;dbname=product","root","root");
$production=$db->query("SELECT * FROM product WHERE num=$prod_num");
$r=$production->fetch();
print "<h1>{$r['name']}</h1>";
			
$cus_name=$_POST["n"];
$cus_addn=$_POST["addn"];
$cus_add=$_POST["add"];
$cus_mail=$_POST["mail"];
$cus_tel=$_POST["tel"];
$cus_busuu=$_POST["busuu"];
			
$db->query("INSERT INTO tb (num,date,cus_name,cus_addn,cus_add,cus_email,cus_tel,prod_num,busuu) VALUES(NULL,NOW(),'$cus_name','$cus_addn','$cus_add','$cus_mail','$cus_tel','$prod_num','$cus_busuu')");
?>





<h2><a href="top.php">トップページへ</a><h2>






	</header>
<!---------------ヘッダー----------->

	<!--------------メイン----------->
	<main>
	<!------------メインビジュアル-------->
		<div id="main_visual">





		</div>










	</main>
	</body>








</html>
