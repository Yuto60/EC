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
	
	</header>
<!---------------ヘッダー----------->
	
	<!--------------メイン----------->
	<main>
	<!------------メインビジュアル-------->
		<div id="main_visual">
		<?php
			$prod_num=$_POST["prod_num"];
			
			$db=new POD("mysql:host=localhost;dbname=product","root","root");
			
			$prod_name=$->query("SERECT name FROM product WHERE num=$prod_num");
			
			$cus_name=$_POST["n"];
			
			$cus_addn=$_POST["addn"];
		
			$cus_add=$_POST["add"];
			
			$cus_mail=$_POST["mail"];
			
			$cus_tel=$_POST["tel"];
			
			$cus_busuu=$_POST["busuu"];
			
			$db=new POD("mysql:host=localhost;dbname=order","root",
						"root");
			$db->query("INSERT INTO tb (nan,date,cus_name,cus_addn,cus_add,cus_email,cus_tel,busuu) VALUES(NULL,NOW(),'$cus_name','$cus_addn','$cus_add','$cus_mail','$cus_tel','$cus_busuu)");
		
			print "<h1>$prod_name</h1>"
			
			?>
			
		
		
		
		</div>
	
	
	
	
	
	
	
	
	
	
	</main>
	</body>








</html>