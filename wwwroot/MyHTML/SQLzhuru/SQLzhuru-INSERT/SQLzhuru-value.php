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
		账号：<input type="text" name="uname" value=""><br/>
		密码：<input type="password" name="passwd" value=""><br/><br/>
		<input type="submit" name="submit" value="注册" style="width:100px;height:25px;">
	</form>
	
	<?php
		include('../../conn.php');
		
		if(isset($_POST['submit']) && !empty($_POST['uname']) && !empty($_POST['passwd'])){
			$username = $_POST['uname'];
			$password = $_POST['passwd'];
			
			$sqli = "INSERT into TEST (username,password) values ($username,$password)";
			if(mysqli_query($conn,$sqli)){
				echo "注册成功！"."<br/>";
			}else{ echo "登陆失败！账号或密码错误！"; }
		}else{ echo "请输入注册账号或密码！"; }
	?>
</center>
</body>