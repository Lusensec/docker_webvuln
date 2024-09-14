<?php
error_reporting(0);
if (!isset($_POST['uname']) || !isset($_POST['pwd'])) {
    echo '<form action="" method="post">'."<br/>";
    echo '<input name="uname" type="text"/>'."<br/>";
    echo '<input name="pwd" type="text"/>'."<br/>";
    echo '<input type="submit" />'."<br/>";
    echo '</form>'."<br/>";
    die;
}
function AttackFilter($StrKey,$StrValue,$ArrReq){  
    if (is_array($StrValue)){
        $StrValue=implode($StrValue);
    }
    if (preg_match("/".$ArrReq."/is",$StrValue)==1){
        print "水可载舟，亦可赛艇！";
        exit();
    }
}
$filter = "and|select|from|where|union|join|sleep|benchmark|,|\(|\)";
foreach($_POST as $key=>$value){
    // AttackFilter($key,$value,$filter);
}
$con = mysqli_connect("127.0.0.1","root","123456","myhtml");
if (!$con){
    die('Could not connect: ' . mysqli_error($con));
}
$sql="SELECT * FROM users WHERE username = '" . $_POST['uname'] . "'";
$query = mysqli_query($con,$sql);
if (mysqli_num_rows($query) == 1) {
    $key = mysqli_fetch_array($query);
    if($key['password'] == $_POST['pwd']) {
        print "CTF{XXXXXX}";
    }else{
        print "亦可赛艇！";
    }
}else{
    print "一颗赛艇！";
}
mysqli_close($con);
?>