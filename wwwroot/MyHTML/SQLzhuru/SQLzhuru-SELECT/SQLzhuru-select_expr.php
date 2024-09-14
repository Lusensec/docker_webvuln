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
		
		if(!empty($_GET['id'])){
			$id = $_GET['id'];
			
			$sqli = "SELECT $id,password FROM USERS where id=1";
			$result = mysqli_query($conn,$sqli);
			$row = mysqli_fetch_array($result);
			if($row){
				echo "<br/>Your Name Is :".$row['username'];
				echo "<br/>Your Password Is :".$row['password'];
			}else{ echo "查询错误！".mysqli_error(); }
		}
	?>
</center>
</body>