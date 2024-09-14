<?php include('session_user.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>后台管理系统</title>
	<style type="text/css">
		div{
			margin: 5px 5px;
			height: 50px;
			width: 100px;
			text-align: center;
			border: solid 1px red
		}
	</style>
</head>
<body>
	<h1>后台管理</h1>
	<?php
		$name = $_SESSION['userloginname'];
		$sourceIP = $_SERVER['REMOTE_ADDR'];

		echo "Welcome <b>$name</b><br/>";
		echo "Your IP is: <b>$sourceIP</b><br/>";
	?>
	
	<a href="xiugai.php">点击修改密码</a><br/><br/>
	
	<!---------------- 以下为管理员权限查看  ------------------->
	<?php
		if($_SESSION['userloginname'] == base64_decode($_COOKIE['name']) && $_SESSION['userloginname'] == "admin"){
	?>
	<div style="border: solid 1px red;height:200px;width: 90%;margin: auto;">
		<table>
			<tr>
				<td><a href="SQLzhuru/index.php"><div>SQL注入<br/>练习</div></a></td>
				<td><a href="INCLUDE/include.php?filename=includejianjie.php"><div>INCLUDE<br/>练习</div></a></td>
				<td><a href="SSRF/ssrf.php?url=http://www.baidu.com"><div>SSRF<br/>练习</div></a></td>
				<td><a href=""><div>MD5<br/>练习</div></a></td>
				<td><a href="Conversion/index.php"><div>进制编码<br/>转换</div></a></td>
			</tr>
			<tr>
				<td><a href="XSSzhuru/XSSzhuru.php?uname="><div>XSS注入<br/>练习</div></a></td>
				<td><a href="RCEzhuru/rce.php?rce="><div>RCE<br/>练习</div></a></td>
				<td><a href="XXEzhuru/xxe.php"><div>XXE<br/>练习</div></a></td>
				<td><a href="JSON/json.php"><div>JSON<br/>练习</div></a></td>
			</tr>
			<tr>
				<td><a href="UPLOAD/upload.php"><div>UPLOAD<br/>练习</div></a></td>
				<td><a href="CSRF/csrf.php?uname=&balance=0"><div>CSRF<br/>练习</div></a></td>
				<td><a href="XULIEhua/xulie.php"><div>反序列化<br/>练习</div></a></td>
				<td><a href="ZhengZe/index.php"><div>正则绕过<br/>练习</div></a></td>
			</tr>
		</table>
	</div>
	<?php
	
		}else{
			echo "<h3><font color='#ff0000'>请<a href='zhuxiao.php'>登陆</a>管理员admin以查看更多</font></h3>";
		}
	?>
</body>
</html>