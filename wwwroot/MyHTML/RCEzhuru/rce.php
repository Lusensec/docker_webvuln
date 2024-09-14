<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>RCE练习</title>
</head>
<body>
<center>
	<?php include('../session.php');
		echo "<br/><br/><br/><br/><br/><br/>";
		echo "<form action='rce.php' method='post'>";
		echo "<input type='text' name='rce'>";
		echo "<input type='submit' name='submit' value='执行'>";
		echo "</form>";
		
		if(isset($_REQUEST['rce']) && !empty($_REQUEST['rce'])){
			$rcetext = $_REQUEST['rce'];
			
			$rce = system($rcetext);
			//echo $rce;
		}else{
			echo "你还可以GET传入eval参数试试！";
			$eval = $_GET['eval'];
//*********************************************************************

			if(preg_replace('/[^\W]+\((?R)?\)/', '', $_GET['eval'])){
				echo "被匹配到了";
			}else{
				echo "未被匹配到";
			}
	
			//class ClassName
			//{
			//	public $code = null;
			//	public $decode = null;
			//	function __construct()
			//	{
			//			$this->code = @$this->x()['Ginkgo'];
			//			echo $this->code."<br/>";
			//			$this->decode = @base64_decode( $this->code );
			//			echo $this->decode."<br/>"."<br/>"."<br/>"."<br/>";
			//			@Eval($this->decode);
			//	}
			//
			//	public function x()
			//	{
			//			return $_REQUEST;
			//	}
			//}
			//new ClassName();
//*********************************************************************
			eval($eval);
		}
	?>
</center>
</body>