<?php
	error_reporting(0);
    header('Content-Type: text/html; charset=utf-8');
    session_start();
    $sessionId = session_id();

    // 设置公共但是需要登陆的白名单页面：
    // xiugai.php、xiugai_2.php、xiugai_3.php

    if($_SESSION['login'] == true && $_SESSION['userloginname'] == base64_decode($_COOKIE['name'])){
        if(basename($_SERVER['PHP_SELF']) == 'houtai.php'){
            echo "您已经成功登陆&nbsp;<a href='zhuxiao.php'>点击注销</a><br/>";
        }else {
            //D:/PHPStudey/phpstudy_pro/WWW/MyHTML
            //echo "您已经成功登陆&nbsp;<a href='http://127.0.0.1/MyHTML/zhuxiao.php'>点击注销</a><br/>";
        }
    }else{
        if (basename($_SERVER['PHP_SELF']) != 'index.php'){
            die("您无权访问该页面，点击<a href='index.php'><span style='font-size:20px'>跳转登陆页面</span></a>");
        }
    }
?>