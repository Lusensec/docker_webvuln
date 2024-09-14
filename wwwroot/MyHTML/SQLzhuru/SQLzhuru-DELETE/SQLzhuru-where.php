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
		请输入要删除的ID：<input type="text" name="id" value=""><br/><br/>
		<input type="submit" name="submit" value="删除" style="width:100px;height:25px;">
	</form>
	
	<?php
		include('../../conn.php');
		
		if(!empty($_POST['id']) && isset($_POST['submit'])){
			$id = $_POST['id'];
			
			$sqli = "DELETE from TEST where ID=$id";
			if(mysqli_query($conn,$sqli)){
				echo "<br/>删除成功！";
			}else{ echo "删除失败！数据库出错！".mysqli_error(); }
		}else{ echo "请输出要删除的ID号！"; }
	?>
</center>
</body>