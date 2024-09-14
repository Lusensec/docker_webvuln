<?php include('../../session.php');echo "<br/><br/><br/><br/><br/>";?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SQL注入练习</title>
</head>
<body>
<center>
	<h3>注册账号：</h3>
	<form action="#" method="POST">
		选择注册的表：<input type="text" name="tablename" value=""><br/><br/>
		<input type="submit" name="submit" value="注册" style="width:100px;height:25px;">
	</form>
	
	<?php
		include('../../conn.php');
		
		if(isset($_POST['submit']) && !empty($_POST['tablename'])){
		
			$tablename = $_POST['tablename'];
			
			$sqli = "INSERT into $tablename (username,password) values ('111','222')";
			if(mysqli_query($conn,$sqli)){
				echo "注册成功！"."<br/>";
				echo "注册的账号：111";
				echo "注册的密码：222";
			}else{ echo "登陆失败！账号或密码错误！"; }
		}else{ echo "请输入注册的表！"; }
	?>
</center>
</body>