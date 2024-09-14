<?php include('../../session.php');echo "<br/><br/><br/><br/><br/>";?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SQL注入练习</title>
</head>
<body>
<center>
	<form action="" method="POST">
		&nbsp;&nbsp;&nbsp;要更新的ID：<input type="text" name="id" value=""><br/><br/>
		要更新的字段：<input type="text" name="expr" value=""><br/><br/>
		&nbsp;&nbsp;&nbsp;&nbsp;要更新的值：<input type="text" name="value" value=""><br/><br/>		
		<input type="submit" name="submit" value="修改" style="width:100px;height:25px;">
	</form>
	
	<?php
		include('../../conn.php');
		
		if(isset($_POST['submit']) && !empty($_POST['id']) && !empty($_POST['expr']) && !empty($_POST['value'])){
			$id = $_POST['id'];
			$expr = $_POST['expr'];
			$value = $_POST['value'];
			
			$sqli = "UPDATE TEST set $expr=$value where id=$id";
			if(mysqli_query($conn,$sqli)){
				echo "<br/>修改成成功！";
			}else{ echo "修改失败，数据库出错！".mysqli_error(); }
		}else{ echo "请输入相关参数！"; }
	?>
</center>
</body>