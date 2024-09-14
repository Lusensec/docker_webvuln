//1、引入express
const express = require('express');

//2、创建应用对象
const app = express();

//3、创建路由规则
app.get('/server/get',(request,response)=>{		//当请求为GET且路径为/server时，执行后面的函数。
	//设置响应头   设置允许跨域
	response.setHeader('Access-Control-Allow-Origin','*');
	
	//设置响应体
	response.send('HELLO GET AJAX');
});

app.post('/server/post',(request,response)=>{		//当请求为POST且路径为/server时，执行后面的函数。
	//设置响应头   设置允许跨域
	response.setHeader('Access-Control-Allow-Origin','*');
	
	//设置json响应体
	const data = {
		name: "hacker"
	}
	//需要将json数据转换成字符串
	let str = JSON.stringify(data);
	//response响应只能是字符串
	response.send(str);
});

app.all('/server/all',(request,response)=>{		//当请求为POST且路径为/server时，执行后面的函数。
	//设置响应头   设置允许跨域
	response.setHeader('Access-Control-Allow-Origin','*');
	//设置响应头。[*]表示接收任何请求头
	response.setHeader('Access-Control-Allow-Headers','*');
	//设置响应体
	response.send('HELLO ALL AJAX');
});

app.get('/server/yanshi',(request,response)=>{		//当请求为GET且路径为/server时，执行后面的函数。
	//设置响应头   设置允许跨域
	response.setHeader('Access-Control-Allow-Origin','*');
	//设置延时3s后发送响应体
	setTimeout(()=>{
		//设置响应体
		response.send("延时响应");
	}, 3000);
});

//4、监听端口启动服务
app.listen(8000,()=>{
	console.log("The 8000 server is listening ...");
});