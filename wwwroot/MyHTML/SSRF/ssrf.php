<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SSRF练习平台</title>
</head>
<body>
<?php
	include('../session.php');
	
	if(isset($_GET['url']) && $_GET['url'] != null){
		$URL = $_GET['url'];
		$CH = curl_init($URL);
		curl_setopt($CH, CURLOPT_HEADER, FALSE);
		curl_setopt($CH, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_exec($CH);
		curl_close($CH);
	}
?>
</body>