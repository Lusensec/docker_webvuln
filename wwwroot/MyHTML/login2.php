<!DOCTYPE html>
<html><head><meta charset="utf-8">
<body>
<?php
	include("conn.php");
	
	if(isset($_POST['登陆'])){
		if(empty($_POST['uname']) || empty($_POST['passwd'])){
			echo "<script>alert('请输入账号或密码！');history.go(-1);</script>";
		}else{
			$sqli = "SELECT * from users where username=? and password=?";
			$stmt = $conn->prepare($sqli);
			//绑定参数
			$stmt->bind_param('ss',$uname,$passwd);
			//绑定结果集
			$stmt->bind_result($id,$username,$password);
			//执行
			$uname = $_POST['uname'];
			$passwd = $_POST['passwd'];
			$stmt->execute();
			
			while($stmt->fetch())
			{
				echo $id.'--'.$username.'--'.$password;
				echo '<br/>';
			}
		}
	}else{
		echo "<script>alert('该页面不可访问，请先登陆');window.location.href='index.html';</script>";
	}
?>
</body>
</head></html>