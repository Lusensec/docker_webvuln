<?php include "conn.php";
	if(!isset($_POST['phone']) && empty($_POST['phone'])){
		die("<script>alert('该页面不可访问，请先去注册！！！');window.location.href='zhuce_1.html';</script>");
	}else{
		$phone = $_POST['phone'];
		$sqli = "SELECT username from users where phone=?";
		$stmt = $conn->prepare($sqli);
		$stmt->bind_param('s',$phone);
		$stmt->execute();
		$stmt->bind_result($username);
		
		if($stmt->fetch()){
			echo "<script>alert('该手机号已存在，请重新注册！！！');window.history.go(-1);</script>";
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>注册</title>
<link type="text/css" rel="stylesheet" href="css/zhuce.css" />
<script type="text/javascript" src="js/zhuce.js"></script>
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
	<div class="main_left">
		<img src="images/zhuce-image-3.png" class="theimg"/>
		<img src="images/zhuce-image-2.png" class="secimg"/>
		<img src="images/zhuce-image-1.png" class="firimg"/>
	</div>
	<div class="main_right">
		<div class="main_r_up">
			<img src="images/user.png" />
			<div class="pp">注册</div>
		</div>
		<div class="sub"><p>已经注册？<a href="index.php"><span class="blue">请登录</span></a></p></div>
		<!--<div class="txt txt0">
			<span style="float:left">短信验证码:</span>
			<input name="" type="text" placeholder="请输入短信验证码" class="txtyzmdx"/>
			<a href="javascript:;" class="tipTimer" onClick="settime(this)">获取到短信验证码</a>
		</div>-->
		<form action="" method="post">
			<input type="hidden" name="phone" value="<?php echo $_POST['phone'];?>">
			<div class="txt txt0">
				<span style="letter-spacing:8px;">用户名:</span>
				<input name="newname" type="text" class="txtphone" placeholder="请输入用户名"/>
			</div>
			<div class="txt txt0">
				<span style="letter-spacing:4px;">登录密码:</span>
				<input name="newpass" type="password" class="txtphone" placeholder="请输入密码"/>
			</div>
			<div class="txt txt0">
				<span style="letter-spacing:4px;">重复密码:</span>
				<input name="newpass1" type="password" class="txtphone" placeholder="请再次输入密码"/>
			</div>
			<div class="txt txt0">
				<a href="zhuce_1.html"><span style=" float:left;color:#31acfb"><返回上一步</span></a>
				<!--<a href="zhuceSucc.html"><div class="zhucebtn">确认注册</div></a>-->
				<button type="submit" name="submit" class="zhucebtn">确认注册</button>
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

<?php include "conn.php";
	
	if(isset($_POST['submit'])){
		if(empty($_POST['newname']) || empty($_POST['newpass']) || empty($_POST['newpass1'])){
			echo "<script>alert('请填写完整的注册表单！！！');</script>";
		}else if ($_POST['newpass'] != $_POST['newpass1']){
			echo "<script>alert('两次密码不正确，请重新输入！！！');</script>";
		}else{
			// 查询该用户名是否存在
			$sqli = "SELECT username,password from users where username=?";
			$stmt = $conn->prepare($sqli);
			$stmt->bind_param('s',$newname);
			$stmt->bind_result($username,$password);
			$newname = $_POST['newname'];
			$stmt->execute();
			
			if($stmt->fetch()){
				echo "<script>alert('用户名已存在，请重新注册！！！')</script>";
			}else{
				// 该用户名不存在，进行正常注册
				
				$sqli = "INSERT into users (username,password,phone) value (?,?,?)";
				$stmt = $conn->prepare($sqli);
				$name = $newname;
				$newpass = md5($_POST['newpass']);
				$phone = $_POST['phone'];
				$stmt->bind_param('sss',$name,$newpass,$phone);
				
				if($stmt->execute()){
					//echo "注册成功！";
					//echo "<a href='index.html'>点击回到登陆页面</a>";
					$sqli = "INSERT into balance (username,balance) value ('$newname','100')";
					$result = mysqli_query($conn,$sqli);
					if(mysqli_affected_rows($conn) > 0){
						echo "<script>location.href='zhuce_3.html';</script>";
					}else{
						echo "<script>alert('注册失败，服务器内部出现未知错误！！！');</script>";
					}
				}else{
					echo "<script>alert('注册失败！！！');</script>";
				}
				$stmt->close();
			}
		}
	}
?>


</body>
</html>
