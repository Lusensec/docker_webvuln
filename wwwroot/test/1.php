<?php
//[NISACTF 2022]popchains
echo 'Happy New Year~ MAKE A WISH<br>';

if(isset($_GET['wish'])){
    @unserialize($_GET['wish']);    // http://xxx.com/?wish=一个对象序列化的值
} else{
    $a=new Road_is_Long;
    highlight_file(__FILE__);
}
/***************************pop your 2022*****************************/
class Road_is_Long{ // 入口类
    public $page;
    public $string;
    public function __construct($file='index.php'){
        $this->page = $file;
    }

    public function __toString(){
        return $this->string->page;     // __get 读取不可访问或不存在 属性 时被调用
    }

    public function __wakeup(){     // 入口函数
        if(preg_match("/file|ftp|http|https|gopher|dict|\.\./i", $this->page)) {
            echo "You can Not Enter 2022";
            $this->page = "index.php";
        }
    }
}

class Try_Work_Hard
{
    protected $var;

    public function append($value)
    {
        // include($value);
        echo $value;
    }

    public function __invoke()
    {
        $this->append($this->var);
    }
}

class Make_a_Change{
    public $effort;
    public function __construct(){
        $this->effort = array();
    }

    public function __get($key){
        $function = $this->effort;
        return $function();     // __invoke：当脚本尝试将 对象 调用为 函数 时触发
    }
}