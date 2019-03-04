<!doctype html>
<html lang="ja">
   <!-----ヘッド------->
    <head>
    <meta harset="utf-8">
        <title>ECサイト　トップページ</title>
        <meta name="keywords" content="ネットショッピング,EC,食料品,日用品,家具、家電製品,本,ファッション">
    <meta name="description" content="食料品から日用品、家具、家電製品、本からファッションまで何でもそろうネットショッピングサイト">
        <link rel="stylesheet" href="css/style1.css">
    </head>
    <!------/ヘッド------->

    <!-------ボディー------>
    <body>
    <!-----ヘッダー------->
        <header id="top">
            <h1><a href="top.php">ECサイト</a></h1>
			</header>
        <!-------ヘッダー------>

		 <!--------メイン------->
        <main>


            <ul>
              <?php
              $db=new PDO("mysql:host=localhost;dbname=product","root","root");
              $category=$db->query("SELECT * FROM category ");
              while($c=$category->fetch()){
              print "<li>  <form action='category.php' method='POST'>
              <input type='hidden' name='cat_num' value='$c[num]'>
			  <img src='$c[pic_add]' >
              <input  type='submit' value='$c[name]' class='footer_button'></form></li>";
              }
?>

            </ul>


    <p class="page_top"><a href="#top">ページトップ</a></p>




        </main>

    </body>
