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
		<tr><th>ϵͳ������Ϣ</th></tr>
		<tr><td>ϵͳ��ǰ�汾��<?php echo $this->_tpl_vars['system_info']['version']; ?>
</td><td>ϵͳ������ʱ�䣺<?php echo $this->_tpl_vars['system_info']['update_no']; ?>
</td></tr>
		<!--<tr><td>���°汾��<?php echo $this->_tpl_vars['system_info']['new_version']; ?>
</td><td>���¸���ʱ�䣺<?php echo $this->_tpl_vars['system_info']['new_update_time']; ?>
</td></tr>-->
		<script type="text/javascript" src="http://www.bluecms.net/demo/version.php?act=get_new_ver&from=<?php echo $this->_tpl_vars['from']; ?>
"></script>
	</table>
</div>
<div id="system_info">
	<table>
		<tr><th>ϵͳ��Ϣ</th></tr>
		<tr><td width="200">ϵͳ��ǰ�汾��</td><td><?php echo $this->_tpl_vars['system_info']['version']; ?>
</td></tr>
		<tr><td>����ϵͳ�� PHP��</td><td><?php echo $this->_tpl_vars['system_info']['os']; ?>
</td></tr>
		<tr><td>�����������</td><td><?php echo $this->_tpl_vars['system_info']['web_server']; ?>
</td></tr>
		<tr><td>MySQL �汾��</td><td><?php echo $this->_tpl_vars['system_info']['mysql_ver']; ?>
</td></tr>
		<tr><td>�ϴ��������ߴ磺</td><td><?php echo $this->_tpl_vars['system_info']['max_filesize']; ?>
</td></tr></table>
</div>
<div id="team">
	<table>
		<tr><th>BlueCMS �����Ŷ�</th></tr>
		<tr><td width="200">��Ȩ��</td><td>BlueCMS�Ŷ�</td></tr>
		<tr><td>�����Ŷӣ�</td><td>Lucks</td></tr>
		<tr><td>�������ʦ���û������Ŷӣ�</td><td>�Ŷ�(jiuduan)</td></tr>
		<tr><td>������ӣ�</td><td><a href="http://www.bluecms.net" target="_blank">�ٷ���ҳ</a>&nbsp;&nbsp;<a href="http://www.bluecms.net/bbs" target="_blank">�ٷ���̳</a></td></tr>
	</table>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>