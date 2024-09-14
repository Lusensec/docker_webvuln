<!DOCTYPE html>
<html><head><meta charset="utf-8">
<body>
<?php
	include("conn.php");
	
	if(isset($_POST['登陆'])){
		if(empty($_POST['uname']) || empty($_POST['passwd'])){
			echo "<script>alert('请输入账号或密码！');history.go(-1);</script>";
		}else{
			$username = "'".$_POST['uname']."'";
			$password = "'".$_POST['passwd']."'";
			
			$sqli = "SELECT username,password from users where username=$username and password=$password";
			$result = mysqli_query($conn,$sqli);
			$row = mysqli_fetch_array($result);
			
			if($row){
				header('Location:houtai.php');
				session_start();
				setcookie('name',base64_encode($_row['username']),time()+10800,'/',null,null);
				$_SESSION['userloginname'] = $row['username'];
				$_SESSION['login'] = 'true';
			}else{
				echo "<script>alert('登陆失败！账号或密码错误！');history.go(-1);</script>";
			}
		}
	}else{
		echo "<script>alert('该页面不可访问，请先登陆');window.location.href='index.html';</script>";
	}
?>
</body>
</head></html>