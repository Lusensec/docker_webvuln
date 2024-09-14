<?php
	header('Content-Type: text/html; charset=utf-8');
	error_reporting(0);
	$serverIP = "127.0.0.1";
	$username = "root";
	$password = "123456";
	$dbname = "myhtml";
	
	$conn = "";
	try{
		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		$conn = mysqli_connect($serverIP,$username,$password,$dbname);
	} catch (Exception $e) {
        try {
            mysqli_connect($serverIP,$username,$password);
        } catch (Exception $e) {
            die("数据库连接失败！<br>请检查 <font color='red'>conn.php 配置文件</font>是否有误".mysqli_connect_error());
        }
		$sql = "CREATE DATABASE myhtml";
		if (mysqli_query(mysqli_connect($serverIP,$username,$password),$sql)){
			//echo "<script>alert('库名创建成功！！！');</script>";
			$conn = mysqli_connect($serverIP,$username,$password,$dbname);
			//来创建数据库表
			$sql = array(
				"CREATE TABLE `balance` (
					`id` int(11) NOT NULL AUTO_INCREMENT,
					`username` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
					`balance` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
					PRIMARY KEY (`id`)
				) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;",
				"CREATE TABLE `message` (
					`id` int(11) NOT NULL AUTO_INCREMENT,
					`username` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
					`message` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
					`time` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
					PRIMARY KEY (`id`)
				) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;",
				"CREATE TABLE `news` (
					`Id` int(11) NOT NULL AUTO_INCREMENT,
					`title` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT '',
					`author` varchar(10) CHARACTER SET utf8 NOT NULL DEFAULT '',
					`content` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '',
					`enterdate` date DEFAULT NULL,
					`hot` int(11) NOT NULL DEFAULT '0',
					PRIMARY KEY (`Id`)
				) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;",
				"CREATE TABLE IF NOT EXISTS `users` (
					`id` int(11) NOT NULL auto_increment primary key,
					`username` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
					`password` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
					`phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0'
				) ENGINE=InnoDB  AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;"
			);
			foreach ($sql as $sqli) {
				if (mysqli_query($conn, $sqli)) {
					//echo "数据表创建成功<br>";
				} else {
					echo "数据表创建失败: " . mysqli_error($conn) . "<br>";
				}
			}
            $sqli1 = "INSERT into users (username,password,phone) value ('admin',md5('admin123'),'')";
            $sqli2 = "INSERT into balance (username,balance) value ('admin','100')";
            $result = mysqli_query($conn,$sqli1);
            $result = mysqli_query($conn,$sqli2);
            echo "<script>alert('靶场初始化成功！！！默认管理员账号密码为：admin/admin123。请在登陆成功之后尽快修改密码！');</script>";
		}
	}
?>