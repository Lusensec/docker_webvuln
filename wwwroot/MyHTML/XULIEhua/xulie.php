<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>反序列化练习平台</title>	
</head>
<body>
<center>
	<?php include('../session.php');echo "<br/><br/><br/><br/><br/>";
//************************************************************************?>
	<form action="xulie.php" method="post">
		payload生成：
		<input type="text" name="xulie">
		<input type="submit" name="submit" value="提交">
	</form><br>
	<?php	
		if(isset($_POST['submit']) && !empty($_POST['xulie'])){
			$xulie = $_POST['xulie'];
//************************************************************************
			/*
			class s{
				public $admin=$xulie;
				public $passwd="ctf";
			}
			*/
			$a = $xulie;
//************************************************************************/
			$xulie = serialize($a);
			echo "$xulie";
		}
	?>
	<br/><br/><br/>
	<form action="xulie.php" method="post">
		请输入一个序列化数据：
		<input type="text" name="fxulie">
		<input type="submit" name="submit" value="提交">
	</form><br>
	<?php
	if(isset($_POST['submit']) && !empty($_POST['fxulie'])){
			$fxulie = $_POST['fxulie'];
			var_dump(unserialize($fxulie));
		}
	?>
</body>
</center>
</html>