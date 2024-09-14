<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>哔哩嘀哩</title>
        <style>
            .div1{
                border-radius:15px;
                height: 240px;
                background-color: snow;
                width:300px;
                text-align: center;
                /*line-height: 27px;*/
                float: left;
                margin-left: 40px;
                margin-top: 3%;
                background-color: black;
            }
            .img1{
                width: 300px;
                height: 200px;
            }
            .p1{
                font-weight: bold;
                font-size: 25px;
                color: snow;
                text-align: center;
                margin-top: 0%;
            }

        </style>
    </head>
    <body>
        <span style="margin-left: 2%;color: red;font-weight: bold">声明本网站仅作为xss和越权漏洞教学使用</span>
        <div style="margin-left:70% ">
            <a href="login.php" id="name"><span style="font-size: 20px;" >登录</span></a>
            <button onclick="alert('请联系qq:1569853210进行充值')" style="height: 20px;color:goldenrod;font-weight: bold">充  值</button>
            <a href="logout.php"><span style="font-size: 20px;color: red" >登出</span></a>
            <a href="zhuce.php"><span style="font-size: 20px;color: darkgreen" >注册</span></a>
        </div>
        <div class="div1">
            <a href="play.php?id=1">
                <img src="./pic/xld.png" class="img1">
                <p class="p1">阿巳与小铃铛</p>
            </a>
        </div>
        <div class="div1">
            <a href="play.php?id=2">
                <img src="./pic/jax.png" class="img1">
                <p class="p1">我修的可能是假仙</p>
            </a>
        </div>
        <div class="div1">
            <a href="play.php?id=3">
                <img src="./pic/qingzi.png" class="img1">
                <p class="p1">灌篮高手</p>
            </a>
        </div>
        <div class="div1">
            <a href="play.php?id=4">
                <img src="./pic/xz.png" class="img1">
                <p class="p1">修真聊天群</p>
            </a>
        </div>
        <div class="div1">
            <a href="play.php?id=5">
                <img src="./pic/ljs.png" class="img1">
                <p class="p1">从前有座灵剑山</p>
            </a>
        </div>
        <div class="div1">
            <a href="play.php?id=6">
                <img src="./pic/cang.png" class="img1">
                <p class="p1">变形少女</p>
            </a>
        </div>
        <div class="div1">
            <a href="play.php?id=7">
                <img src="./pic/xx.png" class="img1">
                <p class="p1">蜡笔小新</p>
            </a>
        </div>
        <div class="div1">
            <a href="play.php?id=8">
                <img src="./pic/dbx.png" class="img1">
                <p class="p1">独步逍遥</p>
            </a>
        </div>
    </body>
</html>

<?php
    include("db.php");
    $ip = $_SERVER["REMOTE_ADDR"];

    $uname=$_COOKIE["uname"];
    $vip=$_COOKIE["vip"];
    $id=$_COOKIE["id"];

    if ($uname && $vip){
        echo "<script>";
        echo "var a=document.getElementById('name');";
        echo "a.innerText = '$uname vip$vip';";
        echo "a.href = 'me.php?id=$id';";
        echo "</script>";
    }
?>
