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
            background:url(../pic/xz.png) no-repeat center top;
            background-size:cover;
            background-attachment:fixed;
        }
    </style>
</head>
<body>
<div class="div1">
    <form action="zhuce.php" method="post">
        账号: <input type="text" name="uname"><br>
        密码: <input type="text" name="pwd"><br>
        <input type="submit" value="注册" style="width: 200px">
    </form>
</div>
</body>
</html>

<?php
    include "db.php";
    $uname=$_POST['uname'];
    $pwd=$_POST['pwd'];
    if($uname && $pwd){
        $sql="select uname from user where uname='$uname'";
        $resu=nselect($sql);
        if($resu[0][0]){
            echo '<script>alert("您注册用户已存在")</script>';
        }else{
            $sql="insert into user  (uname,pwd,vip) values ('$uname','$pwd',1)";
            echo $sql;
            ninsert($sql);
            echo '<script>alert("注册成功，请登录");window.location.href="login.php"</script>';
        }

    }

?>
