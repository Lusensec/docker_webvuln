<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>INCLUDE练习平台</title>
</head>
<body>
<?php
	include('../session.php');
	
	//highlight_file(__FILE__);
	$url =  $_SERVER['PHP_SELF'];
	//echo basename($url);
	if(isset($_GET['filename']) && !empty($_GET['filename'])){
		$filename = $_GET['filename'];
		//echo file_get_contents($filename)."<br/	>";
		include($filename);
	}
?>
</body>