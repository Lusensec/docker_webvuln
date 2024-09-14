<?php include('../session.php');echo "<br/><br/><br/><br/>";?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SQL注入练习</title>
	
	<style type="text/css">
		div{
			margin: 5px 5px;
			height: 50px;
			width: 100px;
			text-align: center;
			border: solid 1px red
		}
	</style>
</head>
<body>
<center>
	<h1>SQL注入练习</h1>
	<table>
		<tr>
			<td><a href="SQLzhuru-SELECT/index.php"><div>SELECT注入<br/>练习</div></a></td>
			<td><a href="SQLzhuru-INSERT/index.php"><div>INSERT注入<br/>练习</div></a></td>
			<td><a href="SQLzhuru-UPDATE/index.php"><div>UPDATE注入<br/>练习</div></a></td>
			<td><a href="SQLzhuru-DELETE/index.php"><div>DELETE注入<br/>练习</div></a></td>
		</tr>
	</table>
</center>
</body>