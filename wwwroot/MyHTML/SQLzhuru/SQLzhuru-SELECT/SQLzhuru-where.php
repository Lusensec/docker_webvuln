<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SQL注入练习</title>
</head>
<body>
<center>
	<?php include('../../session.php');echo "<br/><br/><br/><br/><br/>";?>

	<form action="" method="POST">
		账号：<input type="text" name="uname" value=""><br/><br/>
		密码：<input type="password" name="passwd" value=""><br/><br/>
		<input type="submit" name="submit" value="登陆" style="width:100px;height:25px;">
	</form>
	
	<?php
		include('../../conn.php');
		
		if(!empty($_GET['id'])){
			$id = $_GET['id'];
			$id = "('" . $id . "')";
			
			$sqli = "SELECT username,password FROM USERS WHERE id=$id";
			//echo "<br>".$sqli;
			$result = mysqli_query($conn,$sqli);
			$row = mysqli_fetch_array($result);
			if($row){
				echo "<br/>Your Name Is :".$row['username'];
				echo "<br/>Your Password Is :".$row['password'];
			}//else{ echo "登陆失败！账号或密码错误！".mysqli_error(); }
		}elseif(isset($_POST['submit'])){
			if(empty($_POST['uname']) || empty($_POST['passwd'])){
				echo "请输入账号或密码！";
			}else{
				$username = $_POST['uname'];
				$password = $_POST['passwd'];
				
				$sqli = "SELECT username,password from USERS where username='$username' and password='$password'";
				$result = mysqli_query($conn,$sqli);
				$row = mysqli_fetch_array($result);
				if($row){
					echo "登陆成功！！！"."<br/>";
					echo "<br/>Your Name Is :".$row['username'];
				}else{ echo "登陆失败！账号或密码错误！"; }
			}
		}echo "<br/><br/><br/><br/><br/>";
	?>
</center>
</body>