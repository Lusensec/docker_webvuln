<?php
//退出游戏，清除数据库表
include("conn.php");

$home_id = $_COOKIE['home_id'];

$qipan_id = "qipan_".$home_id;
$sql = "drop table if exists $qipan_id";

if(mysqli_query($conn,$sql)){
    $sql1 = "DELETE FROM home WHERE home_id=$home_id";
    echo $sql1;
    if(mysqli_query($conn,$sql1)){
        echo "home表数据删除成功";
    }else{ echo  "home表数据删除失败！"; }
    echo "房间删除成功";
}else{
    echo "房间删除失败！";
}

if (!empty($_COOKIE)) {
    // 遍历所有的 cookie 并删除它们
    foreach ($_COOKIE as $key => $value) {
        // 设置 cookie 过期时间为过去的时间（例如当前时间减去 3600 秒）
        setcookie($key, '', time() - 3600);
    }
}

//跳转到主界面
header('Location:index.php');

?>