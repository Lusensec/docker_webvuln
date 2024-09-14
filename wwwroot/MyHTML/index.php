<?php
	include('conn.php');

	if ($_SESSION['login'] == true && $_SESSION['userloginname'] == base64_decode($_COOKIE['name'])) {
		// 用户已登录，存在cookie，跳转到houtai.php
		header('Location: houtai.php');
		exit();
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>登录</title>
	
	<link type="text/css" rel="stylesheet" href="css/login.css" />
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function () {
			var height=$(document).height();
			$('.main').css('height',height);
		})
		
		var zhuce = function(){
			window.location.href="zhuce_1.html";
		}
		
		function validateCaptcha() {
			var currentCaptcha = captchaContainer.innerText.toLowerCase();
			var userInput = window.document.getElementsByName("yanzhengma")[0].value.toLowerCase();;
			if (userInput === currentCaptcha) {
				//alert('验证码正确，校验通过！');
				document.forms[0].submit();
			} else {
				alert('验证码错误，请重新输入！');
				event.preventDefault(); //阻止表单的提交
				//清空用户输入的验证码
				userInput = '';
				document.getElementsByName("yanzhengma")[0].value = userInput;
				//重新生成验证码
				refreshCaptcha();
				//聚焦在验证码输入框上
				document.getElementsByName("yanzhengma")[0].focus();
			}
		}
	</script>
	<style>
        #captchaContainer {
            position: relative;
            display: inline-block;
            cursor: pointer;
            border: 1px solid #ccc;
            width: 120px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            font-size: 20px;
            font-family: Arial;
        }
    </style>
</head>

<body>
	<div class="main">
	<div class="main0">
		<div class="main_left">
			<img src="images/login-image-3.png" class="theimg"/>
			<img src="images/login-image-2.png" class="secimg"/>
			<img src="images/login-image-1.png" class="firimg"/>
		</div>
		<div class="main_right">
			<div class="main_r_up">
				<img src="images/user.png" />
				<div class="pp">登录</div>
			</div>
			<div class="sub"><p>还没有账号？<a href="javascript:zhuce()"><span class="blue">立即注册</span></a></p></div>
			<form action="login.php" method="POST">
				<div class="txt">
					<span style="letter-spacing:8px;">用户名:</span>
					<input type="text" name="uname" value="" class="txtphone" placeholder="请输入注册手机号或用户名"/>
				</div>
				<div class="txt">
					<span style="letter-spacing:4px;">登录密码:</span>
					<input type="password" name="passwd" value="" class="txtphone" placeholder="请输入登录密码"/>
				</div>
				<div class="txt">
					<span style=" float:left;letter-spacing:8px;">验证码:</span>
					<input name="yanzhengma" type="text" class="txtyzm" placeholder="请输入页面验证码"/>
					<div id="captchaContainer"></div>
					<script src="js/yanzhengma.js"></script>
				</div>
				<div class="xieyi">
					<input type="radio" name="RememberMe" value="true" checked="true"/>记住我 
					<a href="password_1.php"><span class="blue" style=" padding-left:130px; cursor:pointer">忘记密码?</span></a>
				</div>
				<button name="登陆" class="xiayibu" onclick="validateCaptcha()">登陆</button>
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
</body>
</html>
