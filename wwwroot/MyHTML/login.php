<!DOCTYPE html>
<html><head><meta charset="utf-8"></head>
<body>
<script src="js/yanzhengma.js"></script>
<script>
	alert(code);
</script>

<?php
	include("conn.php");
	
	if(isset($_POST['登陆'])){
		$yanzhengma = $_POST['yanzhengma'];
		
		
		if(empty($_POST['uname']) || empty($_POST['passwd'])){
			echo "<script>alert('请输入账号或密码！');history.go(-1);</script>";
		}else{
			$sqli = "SELECT username,password from users where username=? and password=?";
			$stmt = $conn->prepare($sqli);
			//绑定参数
			$stmt->bind_param('ss',$uname,$passwd);
			//绑定结果集
			$stmt->bind_result($username,$password);
			//执行
			$uname = $_POST['uname'];
			$passwd = md5($_POST['passwd']);
			$stmt->execute();
			
			if($stmt->fetch()){
				if($_POST['RememberMe'] == "true"){
					//echo "<script>alert('记住了');</scirpt>";
	
					//设置cookie 过期时间为1天
					$expiration = time() + (24 *60 *60);
					setcookie('name',base64_encode($username),$expiration,'/',null,null);
					if (isset($_COOKIE['name'])) {
						$expiration = $_COOKIE['name'];
						setcookie('name', $expiration, time() + (24 * 60 * 60), '/', null, null);
					}
					//session_set_cookie_params($expiration, '/', null, false, $httponly);
					session_set_cookie_params($expiration, '/', null, false);
					session_start();
					$_SESSION['userloginname'] = $username;
					$_SESSION['login'] = 'true';
					$sessionId = session_id();
				}else{
					echo "<script>alert('没记住');</scirpt>";
					ini_set('session.gc_maxlifetime', 0);
					setcookie('name',base64_encode($username),time()+10800,'/',null,null);
					session_start();
					$_SESSION['userloginname'] = $username;
					$_SESSION['login'] = 'true';
				}
				header('Location:houtai.php');
			}else{
				$sqli = "SELECT * from users where username='$uname'";
				//echo "$sqli";
				$result = mysqli_query($conn,$sqli);
				$row = mysqli_num_rows($result);
				if($row){
					echo "<script>alert('密码错误，请重试！！！');history.go(-1);</script>";
				}else{
					echo "<script>alert('无此用户，请先注册！！！');history.go(-1);</script>";
				}
			}
		}
	}else{
		echo "<script>alert('该页面不可访问，请先登陆');window.location.href='index.php';</script>";
	}
?>
</body>
</html>