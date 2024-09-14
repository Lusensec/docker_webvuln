<!DOCTYPE html>
<html>
<center>
<head>
	<meta charset="UTF-8">
	<title>XXE练习平台</title>
	<?php
		include('../session.php');
		echo "<br/><br/><br/><br/><br/>";
		
		if(isset($_POST['submit']) && !empty($_POST['xml'])){
			$xml = $_POST['xml'];
			$xxe = simplexml_load_string($xml,'SimpleXMLElement',LIBXML_NOENT);
			//$xxe = simplexml_load_string($xml);
			//$html = $xxe;
			if($xxe){
				$html = $xxe;
			}else{
				$html = "请输入正确的xml";
			}
		}
	?>
</head>
<body>
	<form action="xxe.php" method="post">
		请输入一个XML类型的数据：
		<input type="text" name="xml">
		<input type="submit" name="submit" value="提交">
	</form>
	<?php echo "<br/>".$html;?>
</body>
</center>
</html>