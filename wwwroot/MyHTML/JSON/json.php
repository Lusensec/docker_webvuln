<?php include('../session.php');echo "<br/><br/><br/><br/><br/>";?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>JSON练习</title>
</head>
<body>
<center>
	<form action="json.php" method="post">
		JSON转换成数组：
		<input type="text" name="JSON">
		<input type="submit" name="submit" value="转换">
	</form><br/><br/>

	<?php
	if(isset($_POST['submit']) && !empty($_POST['JSON'])){
		var_dump(json_decode($_POST['JSON']),true);
	}
	?>
</body>
</center>
</body>