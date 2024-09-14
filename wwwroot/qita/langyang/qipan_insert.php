<?php
include ("conn.php");

$table_name = 'qipan_'.$_GET['home_id'];

$sql = "
CREATE TABLE `$table_name` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `qipan_1` int(11) NOT NULL DEFAULT '0',
  `qipan_2` int(11) NOT NULL DEFAULT '0',
  `qipan_3` int(11) NOT NULL DEFAULT '0',
  `qipan_4` int(11) NOT NULL DEFAULT '0',
  `qipan_5` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
";


// 执行 SQL 语句
if (mysqli_query($conn,$sql)) {
    $sql1 = "INSERT INTO `$table_name` VALUES (1,0,0,0,0,0),(2,0,5,0,5,0),(3,0,0,-1,0,0),(4,0,5,0,5,0),(5,0,0,0,0,0);";
    if(mysqli_query($conn,$sql1)){
        header('Location:qipan.php');
    }
} else {
    echo "创建表失败: " . $conn->error;
}

// 关闭连接
$conn->close();

?>