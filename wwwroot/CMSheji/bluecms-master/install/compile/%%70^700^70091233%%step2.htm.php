<?php /* Smarty version 2.6.22, created on 2023-12-22 14:08:09
         compiled from step2.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['charset']; ?>
" />
<title>��װ���� - BlueCMS�D�ط��Ż�ר��CMS��</title>
<link href="templates/css/install.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="top">
	<div class="logo">
		<h2>BlueCMS�D�ط��Ż�ר��CMS�� ��װ����</h2>
	</div>
	<div class="link">
		<ul>
			<li><a href="http://www.bluecms.net" target="_blank">�ٷ���վ</a></li>
			<li><a href="http://www.bluecms.net/bbs" target="_blank">������̳</a></li>
			<li><a href="" target="_blank">����</a></li>
		</ul>
	</div>
	<div class="version">
		<h2>BlueCMS</h2>
	</div>
</div>

<div class="main">
	<div class="m_l">
		<dl class="step">
			<dt>��װ����</dt>
			<dd>
				<ul>
					<li class="succeed">���Э��</li>
					<li class="current">�������</li>
					<li>��������</li>
					<li>���ڰ�װ</li>
					<li>��װ���</li>
				</ul>
			</dd>
		</dl>
	</div>
	<div class="m_r">
		<div class="title"><h3>��������Ϣ</h3></div>
		<div class="content">
		<table width="600" border="0" align="center" cellpadding="0" cellspacing="0" class="data">
			<tr>
					<td>����������ϵͳ</td>
					<td><?php echo $this->_tpl_vars['system_info']['os']; ?>
</td>
			</tr>
			<tr>
					<td>��������������</td>
					<td><?php echo $this->_tpl_vars['system_info']['web_server']; ?>
</td>
			</tr>
			<tr>
					<td>PHP�汾</td>
					<td><?php echo $this->_tpl_vars['system_info']['php_ver']; ?>
</td>
			</tr>
			<tr>
					<td>�ϴ��������ֵ</td>
					<td><?php echo $this->_tpl_vars['system_info']['max_filesize']; ?>
</td>
			</tr>
		</table></div>
		<div class="title"><h3>Ŀ¼Ȩ�޼��</h3></div>
		<div class="content">
		<table width="600" border="0" align="center" cellpadding="0" cellspacing="0" class="data">
			<tr>
				<th align="center" width="100"><strong>Ŀ¼��</strong></th>
				<th><strong>��ȡȨ��</strong></th>
				<th><strong>д��Ȩ��</strong></th>
			</tr>
			<?php unset($this->_sections['dir']);
$this->_sections['dir']['name'] = 'dir';
$this->_sections['dir']['loop'] = is_array($_loop=$this->_tpl_vars['dir_check']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['dir']['show'] = true;
$this->_sections['dir']['max'] = $this->_sections['dir']['loop'];
$this->_sections['dir']['step'] = 1;
$this->_sections['dir']['start'] = $this->_sections['dir']['step'] > 0 ? 0 : $this->_sections['dir']['loop']-1;
if ($this->_sections['dir']['show']) {
    $this->_sections['dir']['total'] = $this->_sections['dir']['loop'];
    if ($this->_sections['dir']['total'] == 0)
        $this->_sections['dir']['show'] = false;
} else
    $this->_sections['dir']['total'] = 0;
if ($this->_sections['dir']['show']):

            for ($this->_sections['dir']['index'] = $this->_sections['dir']['start'], $this->_sections['dir']['iteration'] = 1;
                 $this->_sections['dir']['iteration'] <= $this->_sections['dir']['total'];
                 $this->_sections['dir']['index'] += $this->_sections['dir']['step'], $this->_sections['dir']['iteration']++):
$this->_sections['dir']['rownum'] = $this->_sections['dir']['iteration'];
$this->_sections['dir']['index_prev'] = $this->_sections['dir']['index'] - $this->_sections['dir']['step'];
$this->_sections['dir']['index_next'] = $this->_sections['dir']['index'] + $this->_sections['dir']['step'];
$this->_sections['dir']['first']      = ($this->_sections['dir']['iteration'] == 1);
$this->_sections['dir']['last']       = ($this->_sections['dir']['iteration'] == $this->_sections['dir']['total']);
?>
			<tr>
				<td><?php echo $this->_tpl_vars['dir_check'][$this->_sections['dir']['index']]['dir']; ?>
</td>
				<td align="center"><?php echo $this->_tpl_vars['dir_check'][$this->_sections['dir']['index']]['read']; ?>
</td>
				<td align="center"><?php echo $this->_tpl_vars['dir_check'][$this->_sections['dir']['index']]['write']; ?>
</td>
			</tr>
			<?php endfor; endif; ?>
		</table></div>
		<div class="btn_sub">
			<input type="button" class="btn_back" value="����" onclick="window.location.href='index.php';" />
			<input type="button" class="btn_next" value="����" onclick="window.location.href='index.php?act=step3';" />
		</div>
	</div>
</div>

<div class="foot">

</div>

</body>
</html>