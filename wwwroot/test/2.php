<?php
// 字符逃逸：减少

class A{
    public $v1 = "abcsystem()system()system()";
    public $v2 = '123';

    public function __construct($arga,$argc){
        $this->v1 = $arga;
        $this->v2 = $argc;
    }
}

// 1、值的内容是看前面的长度决定的
// 2、以 ";} 来结尾

$a = '123system()system()system()';
$b = '4567890";s:2:"v2";s:3:"666";}';
$data1 = serialize(new A($a,$b));
$data2 = str_replace("system()","",$data1);

echo $data1;
echo "\n------------------\n";
echo $data2;

echo "\n";
var_dump(unserialize($data2));

?>