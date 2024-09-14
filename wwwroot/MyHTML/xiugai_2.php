<?php include('session_user.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>忘记密码</title>
<link type="text/css" rel="stylesheet" href="css/password.css" />
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
	var height=$(document).height();
	$('.main').css('height',height);
})
</script>
</head>

<body>
<div class="main">
	<div class="main0">
		<div class="formBox">
		<h3>登录密码重置</h3>
		<ul>
			<li class="mainCol firLi">&gt;身份验证</li>
			<li class="mainCol">&gt;登录密码重置</li>
			<li class="lastLi">&gt;重置完成</li>
		</ul>
		<img src="images/line2.png" />
		<!--<div class="itembox itembox_2">
			<label>短信验证码 &nbsp;:</label>
			<input type="text" placeholder="请输入手机验证码" class="yzm"></span>
			<div class="yzmbox2">60秒后重新获取</div>
		</div>-->
		<form action="" method="post">
			<div class="itembox itembox_2">
				<label>新密码&nbsp;:</label>
				<input type="password" name="newpass1" placeholder="请输入新登录密码"></span>
			</div>
			<div class="itembox itembox_2">
				<label>确认密码&nbsp;:</label>
				<input type="password" name="newpass" placeholder="请再次输入新密码"></span>
			</div>
			<div class="itembox itembox_2">
				<label>验证码&nbsp;:</label>
				<input type="text" placeholder="请输入验证码" class="yzm"></span>
				<div class="yzmbox"><img src="images/yanzhengma.png" /></div>
			</div>
			<div class="btnBox">
				<button type="submit" name="修改">下一步</button>
			</div>
		</form>
		</div>
	</div>
</div>

<div class="footer">
	<div class="footer0">
		<div class="footer_l">使用条款 | 隐私保护</div>
		<div class="footer_r">© 2020</div>
	</div> 
</div>

<?php
	include('conn.php');
	if(isset($_POST['修改'])){
		if(empty($_POST['newpass1']) || empty($_POST['newpass'])){
			echo "<script>alert('密码不能为空！！！');</script>";
		}else if ($_POST['newpass1'] != $_POST['newpass']){
			echo "<script>alert('两次密码不正确，请重新输入！！！');</script>";
		}else{
			//两次密码相等，进行修改
			$newpass = md5($_POST['newpass']);
			$userloginname = $_SESSION['userloginname'];
			
			$sqli = "update users set password='$newpass' where username='$userloginname'";
			$result = mysqli_query($conn,$sqli);
			if (mysqli_affected_rows($conn) > 0){
				echo "<script>window.location.href='xiugai_3.php';</script>";
			}else{
				echo "<script>alert('修改无效，请修改密码为不同于旧密码！！！');</script>";
			}
			
			/*$sqli = "SELECT username,password from users where username='$userloginname' and password='$oldpass'";
			$result = mysqli_query($conn,$sqli);
			$row = mysqli_num_rows($result);
			if($row){
				$sqli = "update users set password='$newpass' where username='$userloginname'";
				$result = mysqli_query($conn,$sqli);
				echo "修改成功&nbsp&nbsp";
				echo "<a href='houtai.php'>点击回到首页</a>";
			}else{
				echo "密码错误，请重试";
			}*/
		}
	}
?>

</body>
</html>
