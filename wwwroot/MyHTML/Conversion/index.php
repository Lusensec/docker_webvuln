<?php include('../session.php');echo "<br/><br/><br/><br/><br/>";?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>进制编码转换练习</title>
</head>
<body>
<center>
	<form action="#" method="post">
		\xE7\x99\xBE\xE5\xBA\xA6(百度)转换：
		<input type="text" name="\x">
		<input type="submit" name="\x转换" value="转换">
	</form><br/><br/>

	<?php
	if(isset($_POST['\x转换']) && !empty($_POST['\x转换'])){
		//$_POST['\x']		
		$s = $_POST['\x'];
		$s = preg_replace_callback('/\\\\x([0-9a-f]{2})/i', function($matches) {
			return hex2bin($matches[1]);
		}, $s);
		echo $s . "\n";
		/*
		$ss = rawurlencode($s);
		$un = urldecode($ss);
		echo $un . "\n";
		*/
	}
	?>
</body>
</center>
</body>