<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>文件上传测试点</title>
</head>
<body>
<center>
    <?php
    echo "<br/><br/><br/><br/><br/><br/>";

    if (empty($_GET['url']) or empty($_GET['filetextname'])) {
        echo "<form action='' method='GET'>";
        echo "请求的url链接: ";
        echo "<input type='text' name='url'>";
        echo "<br>";
        echo "上传file 的控件名称：";
        echo "<input type='text' name='filetextname'>";
        echo "<br>";
        echo "<input type='submit' name='submit' value='确认'>";
        echo "</form>";
    } else {
        echo "请选择上传文件：<br/><br/>";
        echo "<form action='". $_GET['url'] ."' method='post' enctype='multipart/form-data'>";
        echo "<input type='file' name='". $_GET['filetextname'] ."'>";
        echo "<input type='submit' name='submit' value='上传'>";
        echo "</form>";
    }

    ?>
</center>
</body>