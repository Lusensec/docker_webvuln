<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>狼羊游戏</title>
	<link rel="stylesheet" href="css/input.css">
</head>
<body>
<center>
	<h1>创建或进入游戏房间</h1>
	<form action="login.php" method="POST">
	<table>
		<tr>
			<td>
				<!--<input type="text" name="home_num" placeholder="请输入房间号">-->
				<div class="coolinput">
					<label for="input" class="text">房间号:</label>
					<input class="input" type="text" name="home_num" placeholder="请输入房间号..." >
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<!--<input type="password" name="home_pass" placeholder="请输入房间密码">-->
				<div class="coolinput">
					<label for="input" class="text">房间密码:</label>
					<input class="input" type="text" name="home_pass" placeholder="请输入房间密码..." >
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<!--<input type="text" name="home_username" placeholder="请输入用户名">	-->
				<div class="coolinput">
					<label for="input" class="text">用户名:</label>
					<input class="input" type="text" name="home_username" placeholder="请输入用户名..." >
				</div>
			</td>
		</tr>

		<tr>
			<td>
				<br>
				<button type="submit" name="home_create" value="创建房间" onclick="lanjie()">创建房间</button>
				<!--<input type="submit" name="home_create" value="创建房间" onclick="lanjie()">-->
				<!--<input type="submit" name="home_into" value="进入房间">	-->

				<button type="submit" name="home_into" value="进入房间">进入房间</button>
			</td>
		</tr>
	</table>
	</form>
	<p>当前存在的房间号：</p><br>
	<div id="home_select"></div>
	<script>
		var flag = 1
		function lanjie(){
			flag = 0
			alert('房间创建之后，请等待小伙伴的加入，勿退出！')
		}
		window.onload = function() {
			setInterval(function () {
				if (flag){
					const xhr = new XMLHttpRequest();
					xhr.open('GET','index_select.php');
					xhr.send();
					xhr.onreadystatechange = function(){
						if(xhr.readyState === 4){ //服务端返回了所有结果之后
							if(xhr.status >= 200 && xhr.status < 300){	//2xx判断为相应成功
							 	home_select = document.getElementById('home_select')
								home_select.innerHTML = xhr.response
							}else{
								alert('响应错误');
							}
						}
					}
				}
			},5000) //每隔5 s刷新一次页面

		}
	</script>

</center>
</body>

</html>