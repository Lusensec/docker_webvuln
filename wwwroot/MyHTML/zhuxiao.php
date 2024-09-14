<?php
session_start();
$_SESSION[] = ARRAY();
//$_SESSION["login"]='false';
//让cookie失效
setcookie(session_name(),null,time()-1,'/');
setcookie('name',null,time()-1,'/');
session_unset(); //清空会话数据
session_destroy();	//注销session
header('Location:index.php');
?>