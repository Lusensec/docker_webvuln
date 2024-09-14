<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>个人主页</title>
    <style>
        .div1{
            margin-top: 5%;
            margin-left: 30%;
            width: 50%;
            text-align: left;
            line-height: 50px;
            font-size: 40px;
            font-weight: bold;
        }
    </style>
</head>
<body>

</body>
</html>


<?php
    include "db.php";
    $id=$_GET["id"];
    $uname=$_COOKIE['uname'];
    $id=$_COOKIE["id"];

    if ($uname){
        $sql="select * from user where id=$id";
        $resu=nselect($sql);
        if($resu){
            $name=$resu[0][1];
            $vip=$resu[0][3];
            echo "<div class='div1'>账户名: $name";
            echo "<br>";
            echo "vip: $vip";
            echo "<br><br>";
            echo "<p style='color: chocolate'>vip等级介绍</p><hr>";
            echo "<p style='font-size: 30px;color: green'>vip1:普通会员,不能观看视频 ￥:0</p>";
            echo "<p style='font-size: 30px;color: rebeccapurple'>vip2:认证会员,可以观看前三个视频 ￥:200</p>";
            echo "<p style='font-size: 30px;color: red'>vip3:大会员,可以观看所有视频,赠送评论权限 ￥:1000</p>";
            echo "</div>";

        }
    }else{
        echo "<script>alert('请先登录');window.location.href='index.php'</script>";
    }



?>
