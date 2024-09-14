<?php include('session.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>修改密码</title>
</head>
<body>
	<form action="" method="post">
		旧密码：<input type="text" name="oldpass" value=""><br/>
		新密码：<input type="text" name="newpass" value=""><br/>
		<input type="submit" name="修改" value="修改">
	</form>

<?php
	include('conn.php');
	if(isset($_POST['修改'])){
		if(empty($_POST['oldpass']) || empty($_POST['newpass'])){
			echo "旧密码和新密码不能为空";
		}else{
			$oldpass = $_POST['oldpass'];
			$newpass = $_POST['newpass'];
			$userloginname = $_SESSION['userloginname'];
			
			$sqli = "SELECT username,password from users where username='$userloginname' and password='$oldpass'";
			$result = mysqli_query($conn,$sqli);
			$row = mysqli_num_rows($result);
			if($row){
				$sqli = "update users set password='$newpass' where username='$userloginname'";
				$result = mysqli_query($conn,$sqli);
				echo "修改成功&nbsp&nbsp";
				echo "<a href='houtai.php'>点击回到首页</a>";
			}else{
				echo "密码错误，请重试";
			}
		}
	}
?>
</body>
</html>