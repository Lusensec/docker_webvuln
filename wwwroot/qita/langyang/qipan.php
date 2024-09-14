<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>狼羊游戏<?php echo $_COOKIE['home_id'];?>号房间</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<center>
    <h1>你的身份是
        <?php
        include("conn.php");

        $home_id = $_COOKIE['home_id'];
        $sql = "select * from home where home_id='$home_id'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        $home_status = $row['status'];
        $home_username = $_COOKIE['home_username'];
        if ($home_username == $row['home_username_one']) {
            echo "狼：";
        } else {
            echo "羊：";
        }
        if ($home_status == $row['home_username_one']){
            echo "狼走";
        } else {
            echo "羊走";
        }
        ?>
    </h1>

    <div id="qipan_div" value="0">
    <table>
        <?php


        $home_id = $_COOKIE['home_id'];
        $qipan_id = "qipan_" . $home_id;

        try {
            $result = mysqli_query($conn,"select * from home where home_id=$home_id");
            $row = mysqli_fetch_array($result);
            if (!$row['home_id'] || $row['home_id'] == ''){
                header("Location:quit.php");//初始化棋盘数据库表
            }
        } catch (Exception $e){
            header("Location:quit.php");//初始化棋盘数据库表
        }

        $flag = 0;
        for ($i = 1; $i <= 5; $i++) {
            $sqli = "select * from " . $qipan_id . " where id = $i";
            $result = mysqli_query($conn,$sqli);
            $row = mysqli_fetch_array($result);

            echo "<tr>";
            for ($j = 1 ; $j <= 5; $j++) {
                $flag++;
                if ($row[$j] == 0){
                    echo "<td><div id='div_kong' value='$flag'></div></td>";
                } elseif ($row[$j] > 0) {   //则显示为羊
                    echo "<td><div id='div_yang' value='$flag'>" . $row[$j] . "</div></td>";
                } else {
                    echo "<td><div id='div_lang' value='$flag'></div></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
    </div>

    <!--退出游戏-->
    <a href='quit.php?home_id=<?php echo $home_id?>'>退出游戏</a>

    <!--这里是js事件-->
    <script src="js/style.js" type="text/javascript" charset="UTF-8"></script>
    <!--<script src="js/test.js" type="text/javascript" charset="UTF-8"></script>-->

</center>
</body>
</html>



