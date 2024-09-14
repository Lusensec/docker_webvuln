<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    <title>金老师独家靶场-反射型XSS</title>
    <style>
        .div1{
            margin-left: 40%;
            margin-top: 5%;
        }
        body{
            background:url(../pic/hk.gif) no-repeat center top;
            background-size:cover;
            background-attachment:fixed;
        }
    </style>
    <body>
        <div class="div1">
            <span style="color: white;margin-left:10%">请输入留言信息</span>
            <form action="lyb.php" method="post">
                <textarea name="yijian" rows="10" cols="60"></textarea>
                <br>
                <select name="vid" style="width: 440px;height: 40px">
                    <option value="1">阿肆与小铃铛</option>
                    <option value="2">灌篮高手</option>
                    <option value="3">店長おすすめ</option>
                    <option value="4">阿肆と小铃</option>
                    <option value="5">ちびまる子ちゃん</option>
                    <option value="6">蜡笔小新</option>
                    <option value="7">おすすめ</option>
                    <option value="8">Tokyo Hot</option>
                </select>
                <br>
                <input type="submit" value="提交" style="width: 400px;font-size: 30px;margin-left: 1%">
            </form>
        </div>
    </body>

</html>
<?php
    include "db.php";
    $id=$_GET["id"];

    $vip=$_COOKIE["vip"];
    $name=$_COOKIE['uname'];
    if($vip==3){
        $info=$_POST["yijian"];
        $vid=$_POST['vid'];
        if($info && $vid){
            $sql="insert into lyb (infos,vid,uname) values ('$info',$vid,'$name')";
            echo $sql;
            $resu=ninsert($sql);
            echo "<script>alert('提交成功')</script>";
            echo "<script>window.location.href='play.php?id=$vid' </script>";
        }
    }else{
        echo "<script>alert('权限不足，请升级您的会员等级')</script>";
        echo "<script>window.location.href='index.php' </script>";
    }
?>

