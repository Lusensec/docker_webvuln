<?php
// 创建连接
function db_link(){
    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $dbname='gkk';
    $db = new mysqli($servername, $username, $password,$dbname);
    if($db->connect_error){
        die('connect error:'.$db->connect_errno);
    }
    $db->set_charset('UTF-8'); // 设置数据库字符集
    return $db;
}



function nselect($sql){
    $db=db_link();
    $result=mysqli_query($db,$sql);
    if ($result){
        $date=mysqli_fetch_all($result);
    }
    return $date;
}

function ninsert($sql){
    $db=db_link();
    $result=mysqli_query($db,$sql) or die('<per>'.mysqli_error($db).'</per>');
    return $result;
}


function chuli($pa){
    $db=db_link();
    $resu=mysqli_real_escape_string($db,$pa);
    return $resu;

}


?>