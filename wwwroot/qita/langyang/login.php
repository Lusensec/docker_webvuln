<?php
include("conn.php");

$home_id = $_POST['home_num'];
$home_pass = $_POST['home_pass'];
$home_username = $_POST['home_username'];
$home_create = $_POST['home_create'];
$home_into = $_POST['home_into'];

if($home_create == null){		//说明进入了房间
	//验证房间号和房间号密码
	$sqli = "select * from home where home_id='$home_id'";
	$result = mysqli_query($conn,$sqli);
	$row = mysqli_fetch_array($result);
	if($row){
		if ($row['home_pass'] === $home_pass){	//房间号和房间密码验证成功
            if ($row['home_username_one'] != $home_username) {
                //加载更新第二个用户的密码
                $sqli = "update home set home_username_two='$home_username' where home_id='$home_id'";
                $result = mysqli_query($conn,$sqli);
                if (mysqli_affected_rows($conn) > 0){	//更新成功，进入游戏界面
                    //加入成功，仅仅设置cookie
                    setrawcookie('home_id', $home_id);  //默认有效期为浏览器会话结束时
                    setrawcookie('home_username', $home_username);
                    //跳转到游戏界面
                    header("Location:qipan_insert.php?home_id=$home_id");//初始化棋盘数据库表
                }else{
                    echo "<script>alert('服务器内部错误！！');</script>";
                }
            } else{
                echo "<script>alert('不能与房主用户名相同！！');</script>";
            }

		}else{ echo "房间密码错误！"; }
	}else{ echo "无此房间！"; }
}else{		//说明创建了房间
	//先查询该房间是否已经被创建
	$sqli = "select * from home where home_id='$home_id'";
	$result = mysqli_query($conn,$sqli);
	$row = mysqli_fetch_array($result);
	if($row){
		exit("<script>alert('创建失败，该房间已经被创建！');history.go(-1);</script>");
	}

	$sqli = "INSERT into home (home_id,home_pass,home_username_one,home_username_two,yidong,status) value ('$home_id','$home_pass','$home_username','','','$home_username')";
	$result = mysqli_query($conn,$sqli);	
	
	if(mysqli_affected_rows($conn) > 0){
		//注册成功，仅仅设置cookie
        setrawcookie('home_id', $home_id);  //默认有效期为浏览器会话结束时
        setrawcookie('home_username', $home_username);
		//跳转到游戏界面		
		header('Location:langyang.php');
	}else{
		echo "注册失败";
	}
}
?>