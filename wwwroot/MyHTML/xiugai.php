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
		<h3>登录密码修改</h3>
		<ul>
			<li class="mainCol firLi">&gt;身份验证</li>
			<li>&gt;登录密码重置</li>
			<li class="lastLi">&gt;重置完成</li>
		</ul>
		<img src="images/line.png" />
		<form action="" method="post">
			<div class="itembox">
				<label>旧密码&nbsp;:</label>
				<input type="password" name="oldpass" placeholder="请输入旧密码"></span>
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
		if(empty($_POST['oldpass'])){
			echo "<script>alert('旧密码不能为空！！！');</script>";
		}else{
			$oldpass = md5($_POST['oldpass']);
			$userloginname = $_SESSION['userloginname'];
			//echo $userloginname;
			
			$sqli = "SELECT username,password from users where username='$userloginname' and password='$oldpass'";
			//echo "$sqli";
			$result = mysqli_query($conn,$sqli);
			$row = mysqli_num_rows($result);
			if($row){
				echo "<script>window.location.href='xiugai_2.php';</script>";
			}else{
				echo "<script>alert('密码错误，请重试！！！');</script>";
			}
		}
	}
?>

</body>
</html>
