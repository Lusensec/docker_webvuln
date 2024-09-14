	<?php
		include('conn.php');
		
		set_time_limit(5 * 60);		//脚本执行5分钟
		while(true){
			include('home_select.php');	
			if($row['home_username_two']){
				break;
			}
			sleep(1);
		}

		// 游戏开始 不停地绘制棋盘
		header("Location:qipan.php");//初始化棋盘数据库表
	?>

