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
		
		function validateCaptcha() {
			var currentCaptcha = captchaContainer.innerText.toLowerCase();
			var userInput = window.document.getElementsByName("yanzhengma")[0].value.toLowerCase();;
			if (userInput === currentCaptcha) {
				//alert('验证码正确，校验通过！');
				//用正则来校验手机号是否有误
				var phoneNumber = document.getElementsByName("phone")[0].value;
				var regex = /^1\d{10}$/;
				if (regex.test(phoneNumber)) {
					// 手机号格式正确
					document.forms[0].submit();
				} else {
					// 手机号格式不正确
					alert('请输入正确的手机号码！');
					event.preventDefault(); //阻止表单的提交
					//清空用户输入的手机号
					document.getElementsByName("phone")[0].value = '';
					//重新生成验证码
					refreshCaptcha();
					//聚焦在手机号输入框上
					document.getElementsByName("phone")[0].focus();
				}
				
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
        <img src="images/zhuce-image-3.png" class="theimg"/>
        <img src="images/zhuce-image-2.png" class="secimg"/>
        <img src="images/zhuce-image-1.png" class="firimg"/>
     </div>
     <div class="main_right">
        <div class="main_r_up">
            <img src="images/user.png" />
            <div class="pp">找回密码</div>
        </div>
        <div class="sub"><p>已经找回？<a href="index.php"><span class="blue">点击登录</span></a></p></div>
		<form action="password_2.php" method="post">
			<div class="txt">
				<span style="letter-spacing:10px;">手机号:</span>
				<input name="phone" type="text" class="txtphone" placeholder="请输入绑定的手机号码"/>
			</div>
			<div class="txt">
				<span style=" float:left;letter-spacing:10px;">验证码:</span>
				<input name="yanzhengma" type="text" class="txtyzm" placeholder="请输入验证码"/>
				<div id="captchaContainer"></div>
				<script src="js/yanzhengma.js"></script>
			</div>
			<button name="next" class="xiayibu" onclick="validateCaptcha()">下一步 > </button>
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
