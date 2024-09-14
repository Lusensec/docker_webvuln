<?php
//对数据库home 进行查询
include "conn.php";

$sql = "select * from home";
$result = mysqli_query($conn,$sql);
if ($result) {
    $rowcount = mysqli_num_rows($result); // 获取查询结果的行数
    if ($rowcount > 0) {
        // 使用 mysqli_fetch_assoc 来遍历结果集
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<p>";
            echo "<b>" . $row['home_username_one'] . "</b>" . " 创建的房间号：" . "<b>" . $row['home_id'] . "</b>" . "，密码是：" . "<b>" . $row['home_pass'] . "</b>" . "<br>";
            echo "</p>";
        }
        // 释放结果集
        mysqli_free_result($result);
    } else {
        echo "暂无房间";
    }
}

?>