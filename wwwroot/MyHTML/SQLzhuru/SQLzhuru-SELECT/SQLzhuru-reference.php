<?php include('../../session.php');echo "<br/><br/><br/><br/><br/>";?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SQL注入练习</title>
</head>
<body>
<center>
	<?php
		include('../../conn.php');
		
		if(isset($_GET['id']) && !empty($_GET['id'])){
			$id = $_GET['id'];
			
			$sqli = "SELECT username,password FROM $id";
			$result = mysqli_query($conn,$sqli);
			$row = mysqli_fetch_array($result);
			if($row){
				echo "<br/>Your Name Is :".$row['username'];
				echo "<br/>Your Password Is :".$row['password'];
			}else{ echo "登陆失败！账号或密码错误！".mysqli_error(); }
		}else{
			echo "请输入id这个参数！";
		}
	?>
</center>
</body>