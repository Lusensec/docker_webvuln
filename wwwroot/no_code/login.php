<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>邪恶小网站</title>
    <style>
        .div1{
            margin-top: 5%;
            margin-left: 30%;
            background-color: white;
            width: 200px;
        }
        body{
            background:url(../pic/jax.png) no-repeat center top;
            background-size:cover;
            background-attachment:fixed;
        }
    </style>
</head>
<body>
<div class="div1">
    <form action="login.php" method="post">
        账号: <input type="text" name="uname"><br>
        密码: <input type="text" name="pwd"><br>
        <input type="submit" value="登录" style="width: 200px">
    </form>
</div>
</body>
</html>

<?php
    include "db.php";

    $uname=$_POST['uname'];
    $pwd=$_POST['pwd'];

    $sql="select uname,pwd,vip,id from user where uname='$uname'";
    $resu=nselect($sql);

    if($resu[0][1]){
        if ($resu[0][1]==$pwd){
            $id=$resu[0][3];
            $vip=$resu[0][2];
            $uname=$resu[0][0];

            setcookie("id",$id);
            setcookie("uname",$uname);
            setcookie("vip",$vip);
            echo "<script>window.location.href='index.php' </script>";
        }else{
            echo "<script>alert('密码错误')</script>";
        }
    }else{
        if($uname){
            echo "<script>alert('请先去注册')</script>";
        }
    }

?>
