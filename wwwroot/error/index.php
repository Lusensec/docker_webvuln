<!DOCTYPE html>
<html>
<head>
  <title>文件上传</title>
  <meta charset="utf-8">
</head>
<body>
  <center>
    <!-- enctype="mulipart/form-data"属性是指以二进制方式进行数据传输 
    传输文件需要设置-->
    <form action="upload_server.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="max_file_size" value="1048576">
      <input type="file" name="file">
      <input type="submit" name="上传">    
    </form>
  </center>
</body>
</html>