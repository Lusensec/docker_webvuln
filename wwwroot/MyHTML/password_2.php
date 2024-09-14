<?php include("conn.php");
	if(isset($_POST['next'])){
		if(empty($_POST['phone'])){
			echo "<script>alert('请先输入绑定的手机号！！！')</script>";
		}else{
			$phone = $_POST['phone'];
			
			$sqli = "SELECT username,password from users where phone=?";
			$stmt = $conn->prepare($sqli);
			$stmt->bind_param('s',$phone);
			$stmt->execute();
			$stmt->bind_result($username,$password);
			
			if($stmt->fetch()){
?>
				
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>注册</title>
<link type="text/css" rel="stylesheet" href="css/zhuce.css" />
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
	var height=$(document).height();
	$('.main').css('height',height);
})

var denglu = function(){
	window.location.href="index.php";
}
</script>
</head>

<body>
<div class="main">
<div class="main0">
	<div class="main_left">
		<img src="images/zhuce-over-3.png" class="theimg"/>
		<img src="images/zhuce-over-2.png" class="secimg"/>
		<img src="images/zhuce-over-1.png" class="firimg"/>
	</div>
	<div class="main_right">
		<div class="main_r_up">
			<img src="images/user.png" />
			<div class="pp">找回密码</div>
		</div>
		<div class="sub"><p>已经找回？<a href="index.php"><span class="blue">点击登录</span></a></p></div>
		<div>
		<div class="font24"><span class="blue" style=" padding-right:20px">-^0^-</span>密码找回成功！</div>
		<div class="font16">您当前帐号为： <span class="blue" style=" font-size:20px"><?php echo $username;?></span></div>
		<div class="font16">您当前密码为： <span class="blue" style=" font-size:20px"><?php echo $password;?></span></div>
		<div class="font14">赶快点击重新登录吧！<a href="javascript:denglu()"><span class="blue" style=" font-size:30px">登陆</span></a></div>
		</div>
	</div>
</div>
</div>

<div class="footer">
<div class="footer0">
	<div class="footer_l">使用条款 | 隐私保护</div>
	<div class="footer_r">© 2020</div>
</div> 
</div>
</body>
</html>

<?php
				
				
			}else{
				echo "<script>alert('查询失败，此手机号未注册！！！')</script>";
			}
			$stmt->close();
		}
	}	
?>
