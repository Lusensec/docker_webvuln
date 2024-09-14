<?php
$db_ip = '127.0.0.1';
$db_user = 'root';
$db_pass = '123456';
$db_name = 'langyang';

$conn = '';
try{
	$conn = mysqli_connect($db_ip,$db_user,$db_pass,$db_name);
} catch (Exception $e) {
	echo "数据库连接失败！" . $e ;
}

?>