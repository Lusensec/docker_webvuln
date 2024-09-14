<?php
include "conn.php";

$yidong = $_GET['yidong'];

//验证房间号和房间号密码
$home_id = $_COOKIE['home_id'];
$qipan_id = "qipan_".$home_id;

$home_status = '';

$sql = "select * from home where home_id=$home_id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

function langyang($conn,$qipan_id,$value1, $value2){
    //判断是狼还是羊
    $hang = intval($value1 / 5) + 1;
    $lie = $value1 % 5;
    if ($lie == 0) {
        $lie = 5;
        $hang = $hang -1;
    }
    $row = qipan_data_select($conn,$qipan_id,$hang);

    //针对狼、羊查询不同的规则
    if ($row[$lie] == -1) {  //查询狼的规则
        return xinazhi_lang($conn,$qipan_id, $value1,$value2);      //符合返回lang，不符合返回false
    } else {
        return xianzhi_yang($value1,$value2);   //符合返回yang，不符合返回false
    }
}

function xinazhi_lang($conn,$qipan_id,$value1,$value2){
    if ( $value1 % 2 == 0 ) {  // 复数位置
        $whil_list1 = [$value1-1, $value1-5,$value1+1, $value1+5];
        $whil_list2 = [$value1-2,$value1-10,$value1+2,$value1+10];
        foreach ($whil_list1 as $value){    //跨一步
            if ($value > 0){
                if ($value == $value2){
                    return 'lang';
                }
            }
        }
        $flag = 0;
        foreach ($whil_list2 as $value) {
            if ($value > 0){    //直接跨两步
                if ($value == $value2){
                    //这需要判定中间是否有羊
                    $val = $whil_list1[$flag];
                    $hang = intval($val / 5) + 1;
                    $lie = $val % 5;
                    if ($lie == 0) {
                        $lie = 5;
                        $hang = $hang -1;
                    }
                    $row = qipan_data_select($conn,$qipan_id,$hang);
                    if ($row[$lie] > 0){    //有羊
                        return xian_yang_data_jian($conn,$qipan_id,$val,'yang');    //返回lang
                    } else {    //无羊
                        return false;
                    }
                }
            }
            $flag++;
        }
    } else {    //奇数位置
        $whil_list1 = [$value1-1,$value1-6, $value1-5, $value1-4,$value1+1,$value1+6, $value1+5,$value1+4];
        $whil_list2 = [$value1-2,$value1-12,$value1-10,$value1-8,$value1+2,$value1+12,$value1+10,$value1+8];
        foreach ($whil_list1 as $value){    //跨一步
            if ($value > 0){
                if ($value == $value2){
                    return 'lang';
                }
            }
        }
        $flag = 0;
        foreach ($whil_list2 as $value) {
            if ($value > 0){    //直接跨两步
                if ($value == $value2){
                    //这需要判定中间是否有羊
                    $val = $whil_list1[$flag];
                    $hang = intval($val / 5) + 1;
                    $lie = $val % 5;
                    if ($lie == 0) {
                        $lie = 5;
                        $hang = $hang -1;
                    }
                    $row = qipan_data_select($conn,$qipan_id,$hang);
                    if ($row[$lie] > 0){    //有羊
                        return xian_yang_data_jian($conn,$qipan_id,$val,'yang');    //返回lang
                    } else {    //无羊
                        return false;
                    }
                }
            }
            $flag++;
        }
    }

}
function xianzhi_yang($value1, $value2) {    //限制落子
    if ( $value1 % 2 == 0 ){
        $while_list = [$value1-1, $value1+1, $value1-5 ,$value1+5];
        foreach ($while_list as $value ) {
            if ( $value > 0 ) {
                if ($value == $value2){
                    return 'yang';
                }
            }
        }
    } else {
        $while_list = [$value1-1, $value1+1, $value1-5 ,$value1+5, $value1-6, $value1-4, $value1+4, $value1+6];
        foreach ($while_list as $value ) {
            if ($value > 0 ) {
                if ($value == $value2){
                    return 'yang';
                }
            }
        }
    }
    return false;
}

function qipan_data_select($conn, $qipan_id, $hang){
    $sql = "select * from $qipan_id where id=$hang";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    return $row;
}

function home_data_select($conn, $home_id){
    $sql = "select * from home where home_id='$home_id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    return $row;
}

function failed($conn, $home_id,$flag){
    if ($flag) {    //$flag 为true ，以为需要切换status
        $row_home = home_data_select($conn,$home_id);
        $home_one = $row_home['home_username_one'];
        $home_two = $row_home['home_username_two'];
        $home_status = $row_home['status'];
        if ($home_status == $home_one){
            mysqli_query($conn,"update home set status='$home_two' where home_id='$home_id'");
        } else {
            mysqli_query($conn,"update home set status='$home_one' where home_id='$home_id'");
        }
    }
    //将yidong从home数据库中清空
    mysqli_query($conn,"update home set yidong='' where home_id='$home_id'");
    echo "Failed";
}

function xian_yang_data_jian($conn,$qipan_id,$xian,$flag){
    if ($flag == 'yang'){
        //更新qipan数据库，羊起点位置数值减1
        //echo $xian;
        $hang = intval($xian / 5) + 1;
        $lie = $xian % 5;
        if ($lie == 0) {
            $lie = 5;
            $hang = $hang -1;
        }
        $row = qipan_data_select($conn, $qipan_id, $hang);
        $data = $row[$lie];
        $data = intval($data) - 1;

        //echo $data;
        $sql4 = "update $qipan_id set qipan_$lie=$data where id=$hang";
        $result = mysqli_query($conn,$sql4);
        if (mysqli_affected_rows($conn) > 0) {    //更新成功
            return "lang";
        }
    } else {
        //更新qipan数据库，羊起点位置数值减1
        $hang = intval($xian / 5) + 1;
        $lie = $xian % 5;
        if ($lie == 0) {
            $lie = 5;
            $hang = $hang -1;
        }
        $sql4 = "update $qipan_id set qipan_$lie=0 where id=$hang";
        $result = mysqli_query($conn,$sql4);
        if (mysqli_affected_rows($conn) > 0) {    //更新成功
            return "lang";
        }
    }

}

function kong_bai($conn,$qipan_id,$value1, $value2){
    //判断是狼还是羊
    $hang = intval($value1 / 5) + 1;
    $lie = $value1 % 5;
    if ($lie == 0) {
        $lie = 5;
        $hang = $hang -1;
    }
    $row = qipan_data_select($conn,$qipan_id,$hang);

    //针对狼、羊查询不同的规则
    if ($row[$lie] == 1) {  //查询起点羊的规则
        if ($value2 == 7 || $value2 == 9 || $value2 == 13 || $value2 == 17 || $value2 == 19 ) {
            return true;
        } else {    //其他位置不允许
            return false;
        }
    } else {    //否则就是狼
        return false;
    }
}

function luozi(){

}

if($row){       //房间存在
    //查看yidong字段是否有值
    if ($row['yidong']){   //已经起子
        // 判断是落子位置是否有其他的子
        $hang = intval($yidong / 5) + 1;
        $lie = $yidong % 5;
        if ($lie == 0) {
            $lie = 5;
            $hang = $hang -1;
        }
        $row = qipan_data_select($conn, $qipan_id, $hang);  //查询qipan落子位置
        if ($row[$lie] != 0) {      //此位置有子
            $lin = home_data_select($conn,$home_id);
            $xian = $lin['yidong'];
            if (kong_bai( $conn,$home_id,$xian ,$yidong)){
                //可落子（只能羊落子）

            } else {    //不能落子
                failed($conn,$home_id,true);
            }
        } else {    //echo "此地无子，可落子";
            //先查询第一次起子的位置
            $lin = home_data_select($conn,$home_id);
            $xian = $lin['yidong'];
            //再将起子位置的yidong从home数据库中清空
            $sql2 = "update home set yidong='' where home_id='$home_id'";
            $result = mysqli_query($conn,$sql2);
            if (mysqli_affected_rows($conn) > 0) {    //更新成功
                //更新qipan数据库之前，查询起子和落子位置规则
                /*
                 * 查询规则之前，先锁定起子是狼还是羊
                 * 限制行动规范，如果行动不合格，需要使用 failed($conn,$home_id,$home_status);
                 * 如果符合规范，需要区别羊与狼，返回的是 yang 、lang
                 */
                $result = langyang($conn,$qipan_id,$xian, $yidong);

                if ($result == 'yang') {   //羊 符合落子规则
                    //更新qipan数据库，落点位置数值加1
                    $data = intval($row[$lie]) + 1;
                    $sql3 = "update $qipan_id set qipan_$lie=$data where id=$hang";
                    $result = mysqli_query($conn,$sql3);
                    if (mysqli_affected_rows($conn) > 0) {    //更新成功
                        //对先羊数量减一
                        xian_yang_data_jian($conn,$qipan_id,$xian ,'yang');
                    }
                } else if ($result == 'lang') {     //狼在走
                    //更新qipan数据库，落点位置数值减1 变成狼
                    $data = -1;
                    $sql3 = "update $qipan_id set qipan_$lie=$data where id=$hang";
                    $result = mysqli_query($conn,$sql3);
                    if (mysqli_affected_rows($conn) > 0) {    //更新成功
                        //对 先狼 数量加一变成空
                        xian_yang_data_jian($conn,$qipan_id,$xian,'lang');
                    }
                } else { failed($conn,$home_id,true); }
            }
            //落子成功
        }
    }
    else {       //还未起子，将值写入yidong中
        //先判别起的子是否是空
        $hang = intval($yidong / 5) + 1;
        $lie = $yidong % 5;
        if ($lie == 0) {
            $lie = 5;
            $hang = $hang -1;
        }
        $row_qipan = qipan_data_select($conn,$qipan_id,$hang);
        if ($row_qipan[$lie] == 0){   //如果起子为空
            failed($conn,$home_id,false);
        } else {            //如果起子不为空
            //判别起子用户的身份
            $row_home = home_data_select($conn,$home_id);
            $cook_user = $_COOKIE['home_username'];
            $home_status = $row_home['status'];
            if ( $cook_user == $home_status ){     //证明是你起子了
                $home_one = $row_home['home_username_one'];
                $home_two = $row_home['home_username_two'];
                //将yidong写入数据库
                if( $home_one == $cook_user ){  //证明你是第一个人，你需要起子是 狼
                    //限制起子为 狼
                    if ($row_qipan[$lie] < 0){
                        $sqli = "update home set yidong='$yidong',status='$home_two' where home_id='$home_id'";
                        $result = mysqli_query($conn,$sqli);
                        if (mysqli_affected_rows($conn) > 0) {    //更新成功
                            echo "Halfway";
                        } else {
                            echo "未到你的回合";
                        }
                    } else {
                        //你的身份是狼，不能走羊
                        echo "请走狼";
                    }
                } else {        //证明你是第二个人，你需要起子是 羊
                    if ($row_qipan[$lie] > 0){
                        $sqli = "update home set yidong='$yidong',status='$home_one' where home_id='$home_id'";
                        $result = mysqli_query($conn,$sqli);
                        if (mysqli_affected_rows($conn) > 0) {    //更新成功
                            echo "Halfway";
                        } else {
                            echo "未到你的回合";
                        }
                    } else {
                        //你的身份是羊，不能走狼
                        echo "请走羊";
                    }
                }
            } else {        //不是你起子
                echo "未到你的回合";
            }
        }

    }
}