<?php include('../../session.php');echo "<br/><br/><br/><br/>";?>
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
	<div style="border: solid 1px red;height: 50%;width: 65%;margin: auto;">
		<table>
			<tr>
				<td><a href="SQLzhuru-where.php?id="><div>WHERE<br/>练习</div></a></td>
				<td><a href="SQLzhuru-select_expr.php?id="><div>select_expr<br/>练习</div></a></td>
				<td><a href="SQLzhuru-reference.php?id="><div>reference<br/>练习</div></a></td>
				<td><a href="SQLzhuru-order by.php?id="><div>order by<br/>练习</div></a></td>
				<td><a href="SQLzhuru-limit.php?id="><div>LIMIT<br/>练习</div></a></td>
				<td><a href="SQLzhuru-intval.php?id="><div>intval<br/>练习</div></a></td>
				<td><a href="SQLzhuru-addslashes.php?id="><div>addslashes<br/>练习</div></a></td>
				<td><a href="SQLzhuru-custom.php?id="><div>自定义脚本<br/>练习</div></a></td>
				<td><a href="SQLzhuru-yuchuli.php"><div>预处理<br/>练习</div></a></td>
			</tr>
		</table>
	</div>
</center>
</body>