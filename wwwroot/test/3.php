<?php
// 字符逃逸：增多
class A{
    public $v1 = 'ls';
    public $v2 = '123';

    public function __construct($arga,$argc){
        $this->v1 = $arga;
        $this->v2 = $argc;
    }
}
$a = '123lslslslslslslslslslslslslslslslslslslslslslslsls";s:2:"v2";s:5:"66666";}';
$b = '456';
$data1 = serialize(new A($a,$b));
$data2 = str_replace("ls","pwd",$data1);

echo $data1;
echo "\n------------------\n";
echo $data2;


echo "\n";
var_dump(unserialize($data2));
