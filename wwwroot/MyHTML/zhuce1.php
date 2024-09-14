<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>注册页面</title>
</head>
<body>
	<h1>注册页面</h1>
	<form action="#" method="post">
		账号：<input type="text" name="newname" value=""><br/>
		密码：<input type="text" name="newpass" value=""><br/>
		<input type="submit" name="submit" value="注册">
	</form>

<?php
	include "conn.php";
	
	if(isset($_POST['submit'])){
		if(empty($_POST['newname']) || empty($_POST['newpass'])){
			echo "账号或密码不能为空！";
		}else{
			$sqli = "SELECT username,password from users where username=?";
			$stmt = $conn->prepare($sqli);
			$stmt->bind_param('s',$newname);
			$stmt->bind_result($username,$password);
			$newname = $_POST['newname'];
			$stmt->execute();
			
			if($stmt->fetch()){
				echo "用户名已存在，请重新注册";
			}else{
				//echo "<script>alert('注册成功');location.href='index.html';</script>";
				$sqli = "INSERT into users(username,password) value (?,?)";
				$stmt = $conn->prepare($sqli);
				$stmt->bind_param('ss',$name,$newpass);
				$name = $newname;
				$newpass = $_POST['newpass'];
				
				if($stmt->execute()){
					echo "注册成功！";
					echo "<a href='index.html'>点击回到登陆页面</a>";
					$sqli = "INSERT into balance (username,balance) value ('$newname','100')";
					$result = mysqli_query($conn,$sqli);
				}else{
					echo "注册失败";
				}
			}
		}
	}
?>
</body>
</html>