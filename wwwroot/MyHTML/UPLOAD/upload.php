<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>UPLOAD练习</title>
</head>
<body>
<center>
	<?php include('../session.php');
		echo "<br/><br/><br/><br/><br/><br/>";
	
		echo "请选择上传文件：<br/><br/>";
		echo "<form action='upload.php' method='post' enctype='multipart/form-data'>";
		echo "<input type='file' name='file'>";
		echo "<input type='submit' name='submit' value='上传'>";
		echo "</form>";
		
		if(is_uploaded_file($_FILES['file']['tmp_name'])){
			$filename = $_FILES['file']['name'];	//文件上传的文件名
			$type = $_FILES['file']['type'];	//文件上传的类型
			$size = $_FILES['file']['size'];	//上传文件的大小
			$tmp_name = $_FILES['file']['tmp_name'];	//临时存放位置
			
			$okType = true;
			//判断文件类型是否是图片
			/*switch($type){
				case 'image/jpeg':$okType = true;break;
				case 'image/pjpeg':$okType = true;break;
				case 'image/gif':$okType = true;break;
				case 'image/png':$okType = true;break;
				default:$okType = false;break;
			}*/
			
			if($okType){
				//把上传的临时文件移动到指定位置
				move_uploaded_file($tmp_name,'uploads/'.$filename);
				$file_path = 'uploads/'.$filename;
				echo $file_path;
				//----------------文件删除漏洞-----------
				$filename = $file_path;
				if (file_exists($filename)) {	//判断文件是否存在
					echo "&nbsp;&nbsp;<a href='delete_file.php?filename=$filename'>删除文件</a>";
				} else {
					echo '文件不存在';
				}
				//----------------文件删除漏洞结束-----------
			}else{
				echo "请上传图片";
			}
		}
	?>
</center>
</body>