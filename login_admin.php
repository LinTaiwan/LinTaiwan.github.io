<meta http-equiv="content-type" content="text/html"; charset=UTF-8>
<?php
	$link_ID = mysql_connect('localhost','root','student');

	mysql_select_db('ch8');

	mysql_query('SET CHARACTER SET UTF8;');
//寫入資料庫
	$result = mysql_query("INSERT INTO admin (account, password) VALUES('".$_POST['account']."', '".md5($_POST['password'])."')", $link_ID);
	if($result)
		echo "加入成功";
	else 
		echo "加入失敗";
?>