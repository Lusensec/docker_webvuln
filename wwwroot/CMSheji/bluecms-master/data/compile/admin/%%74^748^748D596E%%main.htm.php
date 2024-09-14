<?php /* Smarty version 2.6.22, created on 2024-08-25 16:03:09
         compiled from main.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php if ($this->_tpl_vars['install_warning']): ?><div class="warning1"><?php echo $this->_tpl_vars['install_warning']; ?>
</div><?php endif; ?>
<?php if ($this->_tpl_vars['update_warning']): ?><div class="warning1"><?php echo $this->_tpl_vars['update_warning']; ?>
</div><?php endif; ?>
<div id="soft_update">
	<table>
		<tr><th>系统更新信息</th></tr>
		<tr><td>系统当前版本：<?php echo $this->_tpl_vars['system_info']['version']; ?>
</td><td>系统最后更新时间：<?php echo $this->_tpl_vars['system_info']['update_no']; ?>
</td></tr>
		<!--<tr><td>最新版本：<?php echo $this->_tpl_vars['system_info']['new_version']; ?>
</td><td>最新更新时间：<?php echo $this->_tpl_vars['system_info']['new_update_time']; ?>
</td></tr>-->
		<script type="text/javascript" src="http://www.bluecms.net/demo/version.php?act=get_new_ver&from=<?php echo $this->_tpl_vars['from']; ?>
"></script>
	</table>
</div>
<div id="system_info">
	<table>
		<tr><th>系统信息</th></tr>
		<tr><td width="200">系统当前版本：</td><td><?php echo $this->_tpl_vars['system_info']['version']; ?>
</td></tr>
		<tr><td>操作系统及 PHP：</td><td><?php echo $this->_tpl_vars['system_info']['os']; ?>
</td></tr>
		<tr><td>服务器软件：</td><td><?php echo $this->_tpl_vars['system_info']['web_server']; ?>
</td></tr>
		<tr><td>MySQL 版本：</td><td><?php echo $this->_tpl_vars['system_info']['mysql_ver']; ?>
</td></tr>
		<tr><td>上传附件最大尺寸：</td><td><?php echo $this->_tpl_vars['system_info']['max_filesize']; ?>
</td></tr></table>
</div>
<div id="team">
	<table>
		<tr><th>BlueCMS 开发团队</th></tr>
		<tr><td width="200">版权：</td><td>BlueCMS团队</td></tr>
		<tr><td>开发团队：</td><td>Lucks</td></tr>
		<tr><td>界面设计师及用户体验团队：</td><td>九段(jiuduan)</td></tr>
		<tr><td>相关链接：</td><td><a href="http://www.bluecms.net" target="_blank">官方主页</a>&nbsp;&nbsp;<a href="http://www.bluecms.net/bbs" target="_blank">官方论坛</a></td></tr>
	</table>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>