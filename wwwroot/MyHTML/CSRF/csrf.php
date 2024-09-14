<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CSRF练习</title>
</head>
<body>
<center>
<?php
	include('../session.php');
	include('../conn.php');
	
	function balancechaxun($conn,$name){
		$sqli = "SELECT * from balance where username='$name'";
		$result = mysqli_query($conn,$sqli);
		$row = mysqli_fetch_array($result);
		return $row;
	}
	//$sqli = "SELECT * from balance where username='admin'";
	//$result = mysqli_query($conn,$sqli);
	//$row = mysqli_fetch_array($result);
	$myname = $_SESSION['userloginname'];
	$row = balancechaxun($conn,$myname);
	
	echo "<br/><br/><br/><br/><br/>";
	echo "<b>$myname</b>当前余额：".$row['balance']."<br/><br/>";
	echo "<form action='csrf.php' method='post'>";
	echo "转账对象：<input type='text' name='uname'><br/><br/>";
	echo "转账金额：<input type='text' name='balance'><br/><br/>";
	echo "<input type='submit' name='submit' value='转账' style='width:100px'>";
	echo "</form>";
	
	if(empty($_REQUEST['balance'])){
		echo "转账金额不能为空";
	}else{
		$uname = $_REQUEST['uname'];
		$balance = $_REQUEST['balance'];
		
		$row = balancechaxun($conn,$uname);
		if($row){
			if(is_numeric($balance) && (int)$balance >= 0 && $uname != $myname){
				$row = balancechaxun($conn,$myname);
				$mybalance = (int)$row['balance'] - (int)$balance;
				if($mybalance >= 0){
					$row = balancechaxun($conn,$uname);
					$userbalance = (int)$row['balance'] + (int)$balance;

					mysqli_query($conn,"update balance set balance='$mybalance' where username='$myname'");
					mysqli_query($conn,"update balance set balance='$userbalance' where username='$uname'");
					echo "转账成功";
					/*
					echo "转账成功&nbsp&nbsp3秒后回到首页。<br/>";
					echo "<meta http-equiv='refresh' content='3;url=http://127.0.0.1/MyHTML/houtai.php'/>";
					echo "或者<a href='houtai.php'>点击回到首页</a>";
					*/
				}else{echo "转账失败！余额不足！";}
			}else{echo "转账失败！请正确输入用户和金额！";}
		}else{echo "转账失败，该用户不存在！";}
	}
?>
</center>
</body>
</html>