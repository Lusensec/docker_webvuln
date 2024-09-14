<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加标示内容</title>
<link rel="stylesheet" type="text/css" href="template/admin.css"/>
<script type="text/javascript" src="template/images/jquery.js"></script>
<script type="text/javascript" src="template/images/ck_form.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#ex').click(function(){
		$expt=$(this).find('#expt');
		$val=$expt.text();
		if($val=='展开'){
			$('#tb2').show();
			$expt.text('收起');
		}else{
			$('#tb2').hide();
			$expt.text('展开');
		}
	});
	
});

function ck_show_url(n,id){
	$ck=$(n).attr('checked');
	if($ck){
		$(id).show();
	}else{
		$(id).hide();
	}
}
</script>
</head>

<body>
<div class="admin_head">
	<div class="admin_logo"><img src="template/images/admin_logo.gif" border="0"/></div>
	<div class="admin_head_rigt">
		<div class="admin_info">
		管理员<label><?php echo $rel_admin[0]['admin_name'];?></label>欢迎回来</span><span>上次登陆时间:<label style="font-weight:normal"><?php echo empty($rel_admin[0]['admin_time'])?'':date('Y-m-d H:m:s',$rel_admin[0]['admin_time']);?></label></span><span>上次登陆IP:<label style="font-weight:normal"><?php echo $rel_admin[0]['admin_ip']; unset($rel_admin);?></label></span><span>本次登陆IP:<label style="font-weight:normal"><?php echo get_ip();?></label><label style="font-weight:bold; padding-left:8px;"><a href="http://www.beescms.com/alone/alone.php?id=7" target="_blank" style="padding-right:5px; color:#fff">网站建设</a><a href="http://www.beescms.com/article/article.php?id=23" target="_blank" style="padding-right:5px; color:#fff">模板下载</a><a href="http://www.beescms.com/alone/alone.php?id=7" target="_blank" style="padding-right:5px; color:#fff">授权服务</a><a href="http://www.169host.com" target="_blank" style="padding-right:5px; color:#fff">域名空间</a></label>
		</div><!--登录的一些信息-->
		<div class="admin_head_nav">
			
			<ul class="out_nav">
				<li><a href="admin_cache.php?action=del_cache_file">清除缓存</a></li>
				<li><a href="../index.php" target="_blank">网站主页</a></li>
				<li><a href="http://www.beescms.com" target="_blank">官网首页</a></li>
				<li><a href="http://www.beescms.com/help" target="_blank">帮助手册</a></li>
				<li><a href="login.php?action=out">退出登录</a></li>
			</ul>
			<div class="clear"></div>
		</div><!--主导航-->
	</div>
	<div class="clear"></div>	
</div>

<div class="bees_admin_main">
	
	<div class="bees_admin_left_nav">
		<div class="admin_contain_left">
		
		<div class="admin_small_nav">
			
			<?php include('admin_nav.php')?>
			
			
		</div>
	</div><!--左边-->
	</div><!--nav-->
	
	<div class="bees_main_right">
		<div class="bees_main_content">
		
		<div class="admin_position">
		<span>添加标示内容</span>
			<div class="lang">
			<ul>
			 <?php
 $cache_file=DATA_PATH."cache/lang_cache.php";
 $cache_arr=read_cache($cache_file,'lang_cache');
 if(!empty($cache_arr)){
 foreach($cache_arr as $k=>$v){
  if(!$v['lang_is_use']){continue;}
 ?>
 <li><a href="?lang=<?php echo $v['lang_tag'];?>&nav=<?php echo $admin_nav;?>&admin_p_nav=<?php echo $admin_p_nav;?>" class="<?php if($GLOBALS['lang']==$v['lang_tag']){echo 'hover';}?>"><?php echo $v['lang_name'];?></a></li>
 <?php
 }
 }
 ?>
			</ul>
		</div><!--语言-->	
		</div><!--位置-->
		
	<!--内容区-->	
<div class="caozuo_nav" style="width:97%; margin:0 auto">
<p style="line-height:24px;">片段内容只包含内容，内容形式如:首页简介,联系方式等页面部分需要手工修改的部分信息</p>
<p style="line-height:24px;">默认模板【标示名称】为以下几个可以自动输出：</p>
<p style="line-height:24px; color:#0000FF">contact_us输出联系方式；about_us输出简介</p>
<div class="clear"></div>
</div>

<div class="order_contain">
<form name="maininfo" method="post" action="?nav=list_block&admin_p_nav=<?php echo $admin_p_nav;?>" class="form" enctype="multipart/form-data">
 <div class="order_main">
 <table cellpadding="0" cellspacing="0" width="100%">
 	<thead>
		<tr><th style="width:20%">参数说明</th><th style="width:80%">参数值</th></tr>
	</thead>
	<tbody>
		<tr>
		  <td style="width:20%;text-align:center" class="w1"><span title="作为后台管理使用" class="help">片段名称：</span></td><td style="width:80%"><input name="tag_name" value="" title="片段名称" style="width:50%" reg="[^0]" />作为后台片段内容管理使用<span name="easyTip">不能为空</span></td>
		</tr>
		<tr>
		  <td style="width:20%;text-align:center" class="w1"><span title="请使用汉字、数字、字母,填写后不可更改" class="help">标示名称：</span></td><td style="width:80%"><input name="tag" value="" reg="^\w+$" title="标示名称" style="width:50%" /><span name="easyTip">只能为字母、数字或_组合</span></td>
		</tr>
		<tr>
		  <td style="width:20%;text-align:center" class="w1">片段内容：</td><td style="width:80%">
		 <?php
		 echo $GLOBALS['CKEditor']->editor("content", '',$fck_config);
		 ?>
		  </td>
		</tr>

		
		
		</tbody>
 </table>
 </div>
<div class="order_btn">
<input type="hidden" name="action" value="save_content"/><input type="hidden" name="lang" value="<?php echo $lang;?>"/>
  <input type="submit" value="确定" name="submit"/><input type="reset" style="margin:0 10px;" value="重置" name="reset"/>
 </div>
</form>
</div><!--内容切换-->

<!--内容区-->

		</div>	
	</div><!--main-->
	<div class="clear"></div>
</div>
<div class="bees_admin_foot">
	<p>版权所有 © 2009-2013 beescms.com，并保留所有权利。</p>
</div>	



</body>
</html>
