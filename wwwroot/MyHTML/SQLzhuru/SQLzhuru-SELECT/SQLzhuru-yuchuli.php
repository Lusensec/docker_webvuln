<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SQL注入练习</title>
</head>
<body>
<center>
	<?php include('../../session.php');echo "<br/><br/><br/><br/><br/>";?>
	
	<form action="" method="POST">
		账号：<input type="text" name="uname" value=""><br/><br/>
		密码：<input type="password" name="passwd" value=""><br/><br/>
		<input type="submit" name="submit" value="登陆" style="width:100px;height:25px;">
	</form>
	
	<?php
		// 创建数据库连接
		$dsn = "mysql:host=127.0.0.1:3306;dbname=myhtml;charset=utf8";
		$username = "root";
		$password = "123456";
		
		try {
			$pdo = new PDO($dsn, $username, $password);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			// 处理数据库连接错误
			die("数据库连接失败：" . $e->getMessage());
		}
		
		// 准备 SQL 查询语句
		$sql = "SELECT * FROM users WHERE username = :username AND password = :password";
		$stmt = $pdo->prepare($sql);
		
		// 绑定参数
		$username = $_POST['uname'];
		$password = $_POST['passwd'];
		$stmt->bindParam(':username', $username);
		$stmt->bindParam(':password', $password);
		
		// 执行查询
		$stmt->execute();
		
		// 获取结果
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		
		// 处理结果
		if ($result) {
			// 用户验证成功
			echo "登录成功！";
		} else {
			// 用户验证失败
			echo "登陆失败！！！";
		}

	?>
	
</center>
</body>