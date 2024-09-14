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
            width: 220px;
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
        <label style="color: rebeccapurple">
            请输入验证码:
            <label id="la" style="color: red;font-size: 16px;font-weight: bold"></label>
            <br>
        </label>
        验证码:<input type="text" name="code">
        <input type="submit" value="登录" style="width: 200px">
    </form>
</div>
</body>
</html>

<?php
    include "db.php";
//    生成验证码
    $ip = $_SERVER["REMOTE_ADDR"];
    $uname=$_POST['uname'];
    $pwd=$_POST['pwd'];
    $code=$_POST["code"];
    if ($code){
        if ($uname && $pwd){
            $sql="select code,ischeck from codes where ip='$ip' order by id desc limit 1";
            $rcode=nselect($sql);
            if ($code==$rcode[0][0] and $rcode[0][1]==0){
                $sql="update codes set ischeck=1 where code=$code";
                nselect($sql);
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
                        echo "<script>window.location.href='login.php' </script>";
                    }
                }else{
                    if($uname){
                        echo "<script>alert('$uname 不存在，请先注册')</script>";
                        echo "<script>window.location.href='login.php' </script>";
                    }
                }
            }else{
                echo "<script>alert('验证码错误')</script>";
                echo "<script>window.location.href='login.php' </script>";

            }

        }
    }else{
        $code=mt_rand(1000,9999);
        echo "<script>";
        echo "var a=document.getElementById('la');";
        echo "a.innerHTML = '$code'";
        echo "</script>";

        $sql="update codes set ischeck=3 where ip='$ip' and ischeck=0";
        ninsert($sql);
        $sql="INSERT INTO codes (code,ip,ischeck) VALUES ('$code','$ip',0)";
        ninsert($sql);

    }





?>
