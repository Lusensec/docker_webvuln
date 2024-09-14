<?php
    include 'db.php';
    $id=$_GET["id"];
    $ip = $_SERVER["REMOTE_ADDR"];

    $uname=$_COOKIE["uname"];
    $vip=$_COOKIE["vip"];


    if ($uname){
        if ($vip==1){
            echo "<script>alert('您还不是会员，请先去充值')</script>";
            echo "<script>window.location.href='index.php' </script>";
        }elseif ($vip==2){
            if ($id<=3){
                $html='<video controls="controls" autoplay="autoplay" height="500px" width="100%">';
                $html=$html.get_html($id);
                $html=$html.'</video>';
                echo $html;
            }else{
                echo "<script>alert('大会员专享，请先去升级')</script>";
                echo "<script>window.location.href='index.php' </script>";
            }
        }else{
            if($vip==3){
                $html='<video controls="controls" autoplay="autoplay" height="500px" width="100%">';
                $html=$html.get_html($id);
                $html=$html.'</video>';
                echo $html;
            }else{
                echo "<script>alert('非法入侵，以将您的IP: $ip 上报网警')</script>";
                echo "<script>window.location.href='index.php' </script>";
            }
        }
    }else{
        echo "<script>alert('请先登录')</script>";
        echo "<script>window.location.href='login.php' </script>";
    }

    //展示留言
    $sql="select * from lyb where vid = $id order by id desc";
    $resu=nselect($sql);
    echo "<span style='font-weight: bold;font-size: 30px'>留言列表  |  </span>";
    echo "<a href='lyb.php?id=$id' style='font-weight: bold;font-size: 30px'>点击留言</a>";
    echo "<hr>";
    if($resu){
        foreach ($resu as $item){
            $message=$item[1];
            echo '<div>'."<span style='font-weight: bold;color: rebeccapurple'>$item[3]</span>";
            echo "留言信息:<span style='font-weight: bold;color: darkorange'>$message</span>"."</div>";
        }
    }

    function get_html($id){
        if($id==1){
            $html='<source src="./pic/asi.mp4" type="video/mp4" />';
        }elseif($id==2){
            $html='<source src="./pic/jx.mp4" type="video/mp4" />';
        }elseif($id==3){
            $html='<source src="./pic/msb.mp4" type="video/mp4" />';
        }elseif($id>=3 && $id<=5){
            $html='<source src="./pic/wlrc.mp4" type="video/mp4" />';
        }elseif($id==6){
            $html='<source src="./pic/msb.mp4" type="video/mp4" />';
        }else{
            $html='<source src="./pic/wlrc.mp4" type="video/mp4" />';
        }
        return $html;
    }

?>
