<?php /* Smarty version 2.6.22, created on 2024-08-25 16:00:50
         compiled from reg.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.gor/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_tpl_vars['current_act']; ?>
 - <?php echo $this->_tpl_vars['site_name']; ?>
 - Powered by BlueCMS</title>
<link rel="shortcut icon" href="/images/favicon.ico" />
<link href="templates/default/css/main.css" rel="stylesheet" type="text/css" />
<link href="templates/default/css/category.css" rel="stylesheet" type="text/css" />
<script src="templates/default/css/reg.js" type="text/javascript"></script>
<script src="templates/default/css/common.js" type="text/javascript"></script>
</head>
<body>
<div id="top_nav">
	<div id="top_nav_left">
		<ul>
		<li>����,��ӭ���ķ���!</li>
		<?php if ($this->_tpl_vars['user_name']): ?>
		<li><font style="color:#ff6600;font-weight:bold;"><?php echo $this->_tpl_vars['user_name']; ?>
</font></li>
		<li><a href="user.php?act=logout">�˳�</a></li>
		<?php else: ?>
		<li><a href="user.php?act=login">��¼</a></li>
		<li><a href="user.php?act=reg">���ע��</a></li>
		<?php endif; ?>
		</ul>
	</div>
	<div id="top_nav_right">
	<ul><li><a href="JavaScript:" onClick="var strHref=window.location.href;this.style.behavior='url(#default#homepage)';this.setHomePage('<?php echo $this->_tpl_vars['site_url']; ?>
');">��Ϊ��ҳ</a></li><li><a href="javascript:window.external.AddFavorite(location.href, document.title)">�����ղ�</a></li></ul>
	</div>
</div>

<div class="wapper">
	<div id="top"><a href="./" target="_self" class="logo"><img src="templates/default/images/logo.gif" alt="<?php echo $this->_tpl_vars['site_name']; ?>
" border="0" /></a>
	</div>
	<div class="clear"></div>
	<div class="active_act">
		�����ڵ�λ�ã�<a href="./">��ҳ</a> &raquo; <?php echo $this->_tpl_vars['current_act']; ?>
	</div>
	<div class="clear"></div>

	<div id="r_content">
           <form name="reg_form" method="post" action="user.php" target="_self" onsubmit="return check_form(this)" id="reg_form" >
		   		<h2>��дע����Ϣ<span>������Ѿ�ע�ᣬ������<a href="user.php?act=login">��¼</a>!</span></h2>
		   		<input type="hidden" name="referer" value="" />
					  <dl>
						<dt>&nbsp; &nbsp; &nbsp; &nbsp;�û�����<input type="text" id="user_name" name="user_name" class="inputbox" onblur="check_user_name()" maxlength="20" /><span id="check_user_name_warning"></span></dt>
						<dd>�û���ע��󽫲����޸ģ�����ʹ�����ģ����֣���ĸ������4��16���ַ�֮�䣡</dd>
						<dt>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;���룺<input type="password" name="pwd" class="inputbox" onblur="check_pwd()"/><span id="check_pwd_warning" ></span></dt>
						<dd>���鲻Ҫ���õĹ��ڼ򵥣�</dd>
						<dt>&nbsp; &nbsp;ȷ�����룺<input type="password" name="pwd1" class="inputbox" onKeyUp="check_pwd()" onblur="check_pwd()" /><span id="check_pwd1_warning" ></span></dt>
						<dd>�ظ�����������룡</dd>
						<dt>&nbsp; &nbsp;�������䣺<input type="text" name="email" onblur="check_email()" class="inputbox email"  maxlength="60" /><span id="check_email_warning" ></span></dt>
						<dd>�����һض�ʧ���룡</dd>
						<dt>&nbsp; &nbsp; &nbsp; &nbsp;��֤�룺<input type="text" name="safecode" class="inputbox"/> <img id="safecode" onclick="this.src=this.src+'?'" src="include/safecode.php" border=0  height=24 alt="������? ���������֤��" style="vertical-align:middle" /></dt>
						<dd><br />�������ұ�ͼƬ�ڵ��ַ���</dd>
						<dt>&nbsp; &nbsp; &nbsp; &nbsp;<input type="submit" name="submit" value="�ύע��" />
						<input type="hidden" name="from" value="<?php echo $this->_tpl_vars['from']; ?>
" />
						<input type="hidden" name="act" value="do_reg" /></dt>
					</dl>
		 	</form>
	</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

</div>
</body>
</html>