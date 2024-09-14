<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SQL注入练习</title>
</head>
<body>
<center>
	<?php include('../../session.php');echo "<br/><br/><br/><br/><br/>";?>

	
	<?php
		include('../../conn.php');
		
		if(!empty($_GET['id'])){
			$id = check($_GET['id']);
			
			$id = "('" . $id . "')";
			
			$sqli = "SELECT username,password FROM USERS WHERE id=$id";
			echo $sqli;
			$result = mysqli_query($conn,$sqli);
			$row = mysqli_fetch_array($result);
			if($row){
				echo "<br/>Your Name Is :".$row['username'];
				echo "<br/>Your Password Is :".$row['password'];
			}//else{ echo "登陆失败！账号或密码错误！".mysqli_error(); }
		}
		
		//检测函数
		
		function check($check){
			$check = intval($check);
			return $check;
		}
	?>
</center>
</body>