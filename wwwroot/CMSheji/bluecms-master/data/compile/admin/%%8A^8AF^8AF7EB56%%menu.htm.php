<?php /* Smarty version 2.6.22, created on 2024-08-25 16:03:04
         compiled from menu.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>BlueCMS�˵�</title>
<link href="css/menu.css" rel="stylesheet" type="text/css" />
</head>

<script language="javascript">
function $(objectId)
{
	 return document.getElementById(objectId);
}

function showHide(objname)
{
    var obj = $(objname);
    if(obj.style.display == "none")
    {
        obj.style.display = "block";
    }
    else
    {
        obj.style.display = "none";
    }

    return false;
}
</script>
<base target="mainFrame">
<body>
<div class="menu">

    <dl>
        <dt><a href="" onclick="return showHide('common');" target="_self">���ò���</a></dt>
        <dd id="common" style="display:block;">
            <ul>
				<li><a href='article.php?act=add'>������������</a></li>
				<li><a href='info.php?act=add1'>����������Ϣ</a></li>
				<li><a href='flash.php'>��ҳflash</a></li>
				<li><a href='nav.php'>��������</a></li>
				<li><a href='ann.php'>��վ��Ϣ</a></li>
				<li><a href='cache.php?act=clean'>���»���</a></li>
            </ul>
        </dd>
    </dl>
	<dl>
        <dt><a href="" onclick="return showHide('arc');" target="_self">��������</a></dt>
        <dd id="arc" style="display:none;">
            <ul>
            	<li><a href='arc_cat.php'>���ŷ������</a></li>
            	<li><a href="" onclick="return showHide('arc_cat');">���Ź���</a></li>
            	<dd id="arc_cat" style="display:none;"><ul>
            	<?php if ($this->_tpl_vars['arc_cat_list']): ?>
            	<?php unset($this->_sections['cat']);
$this->_sections['cat']['name'] = 'cat';
$this->_sections['cat']['loop'] = is_array($_loop=$this->_tpl_vars['arc_cat_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cat']['show'] = true;
$this->_sections['cat']['max'] = $this->_sections['cat']['loop'];
$this->_sections['cat']['step'] = 1;
$this->_sections['cat']['start'] = $this->_sections['cat']['step'] > 0 ? 0 : $this->_sections['cat']['loop']-1;
if ($this->_sections['cat']['show']) {
    $this->_sections['cat']['total'] = $this->_sections['cat']['loop'];
    if ($this->_sections['cat']['total'] == 0)
        $this->_sections['cat']['show'] = false;
} else
    $this->_sections['cat']['total'] = 0;
if ($this->_sections['cat']['show']):

            for ($this->_sections['cat']['index'] = $this->_sections['cat']['start'], $this->_sections['cat']['iteration'] = 1;
                 $this->_sections['cat']['iteration'] <= $this->_sections['cat']['total'];
                 $this->_sections['cat']['index'] += $this->_sections['cat']['step'], $this->_sections['cat']['iteration']++):
$this->_sections['cat']['rownum'] = $this->_sections['cat']['iteration'];
$this->_sections['cat']['index_prev'] = $this->_sections['cat']['index'] - $this->_sections['cat']['step'];
$this->_sections['cat']['index_next'] = $this->_sections['cat']['index'] + $this->_sections['cat']['step'];
$this->_sections['cat']['first']      = ($this->_sections['cat']['iteration'] == 1);
$this->_sections['cat']['last']       = ($this->_sections['cat']['iteration'] == $this->_sections['cat']['total']);
?>
            	<li><a href="article.php?cid=<?php echo $this->_tpl_vars['arc_cat_list'][$this->_sections['cat']['index']]['cat_id']; ?>
"><?php echo $this->_tpl_vars['arc_cat_list'][$this->_sections['cat']['index']]['cat_name']; ?>
</a></li>
            	<?php endfor; endif; ?>
            	<?php else: ?>
            	<li><a>��û�����ŷ���</a></li><?php endif; ?>
            	</ul></dd>
            </ul>
        </dd>
    </dl>
    <dl>
        <dt><a href="" onclick="return showHide('content');" target="_self">������Ϣ</a></dt>
        <dd id="content" style="display:none;">
            <ul>
            <li><a href='category.php'>��Ŀ�б�</a></li>
            <li><a href="" onclick="return showHide('info');">��Ϣ����</a></li>
            <dd id='info' style="display:none;"><ul>
            <?php if ($this->_tpl_vars['cat_list']): ?>
			<?php unset($this->_sections['cat']);
$this->_sections['cat']['name'] = 'cat';
$this->_sections['cat']['loop'] = is_array($_loop=$this->_tpl_vars['cat_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cat']['show'] = true;
$this->_sections['cat']['max'] = $this->_sections['cat']['loop'];
$this->_sections['cat']['step'] = 1;
$this->_sections['cat']['start'] = $this->_sections['cat']['step'] > 0 ? 0 : $this->_sections['cat']['loop']-1;
if ($this->_sections['cat']['show']) {
    $this->_sections['cat']['total'] = $this->_sections['cat']['loop'];
    if ($this->_sections['cat']['total'] == 0)
        $this->_sections['cat']['show'] = false;
} else
    $this->_sections['cat']['total'] = 0;
if ($this->_sections['cat']['show']):

            for ($this->_sections['cat']['index'] = $this->_sections['cat']['start'], $this->_sections['cat']['iteration'] = 1;
                 $this->_sections['cat']['iteration'] <= $this->_sections['cat']['total'];
                 $this->_sections['cat']['index'] += $this->_sections['cat']['step'], $this->_sections['cat']['iteration']++):
$this->_sections['cat']['rownum'] = $this->_sections['cat']['iteration'];
$this->_sections['cat']['index_prev'] = $this->_sections['cat']['index'] - $this->_sections['cat']['step'];
$this->_sections['cat']['index_next'] = $this->_sections['cat']['index'] + $this->_sections['cat']['step'];
$this->_sections['cat']['first']      = ($this->_sections['cat']['iteration'] == 1);
$this->_sections['cat']['last']       = ($this->_sections['cat']['iteration'] == $this->_sections['cat']['total']);
?>
			<li><a href="info.php?cid=<?php echo $this->_tpl_vars['cat_list'][$this->_sections['cat']['index']]['cat_id']; ?>
"><?php echo $this->_tpl_vars['cat_list'][$this->_sections['cat']['index']]['cat_name']; ?>
</a></li>
			<?php endfor; endif; ?>
			<?php else: ?>
			<li><a>��û����Ŀ����</a></li><?php endif; ?>
			</ul></dd>
            <li><a href='model.php'>ģ�͹���</a></li>
			<li><a href='attachment.php'>�������Թ���</a></li>
			<li><a href='area.php'>��������</a></li>
            </ul>
        </dd>
    </dl>
    <dl>
        <dt><a href="" onclick="return showHide('mod');" target="_self">ģ�����</a></dt>
        <dd id="mod" style="display:none;">
            <ul>
            	<li><a href='comment.php'>���۹���</a></li>
				<li><a href='ad.php'>������</a></li>
            	<li><a href='ad_phone.php'>�绰���λ</a></li>
				<li><a href='link.php'>��������</a></li>
				<li><a href='uc_setting.php'>UC����ģ��</a></li>
            </ul>
        </dd>
    </dl>
    <dl>
        <dt><a href="" onclick="return showHide('user');" target="_self">��Ա����</a></dt>
        <dd id="user" style="display:none;">
            <ul>
				<li><a href='user.php'>��Ա�б�</a></li>
				<li><a href='user.php?act=add'>��ӻ�Ա</a></li>
				<li><a href="sys_user.php">ϵͳ���û�</a></li>
				<li><a href="ipbanned.php">��ֹIP</a></li>
            </ul>
        </dd>
    </dl>
	<dl>
        <dt><a href="" onclick="return showHide('pay');" target="_self">��ֵ����</a></dt>
        <dd id="pay" style="display:none;">
            <ul>
				<li><a href="card.php">��ֵ������</a></li>
				<li><a href="service.php">����۸�</a></li>
				<li><a href="pay.php">֧������</a></li>
            </ul>
        </dd>
    </dl>
    <dl>
        <dt><a href="" onclick="return showHide('sys');" target="_self">ϵͳ����</a></dt>
        <dd id="sys" style="display:none;">
            <ul>
				<li><a href='setting.php'>վ������</a></li>
				<li><a href='cache.php?act=set'>��������</a></li>
				<li><a href='admin_log.php'>������־����</a></li>
				<li><a href='tpl_manage.php'>ģ�����</a></li>
				<li><a href='database.php'>���ݿⱸ��/��ԭ</a></li>
            </ul>
        </dd>
    </dl>
    <dl>
        <dt><a href="" onclick="return showHide('help');" target="_self">ϵͳ����</a></dt>
        <dd id="help" style="display:none;">
            <ul>
				<li><a href='http://www.bluecms.net' target="_blank">�ٷ���ҳ</a></li>
				<li><a href='http://www.bluecms.net/bbs' target="_blank">�ٷ���̳</a></li>
            </ul>
        </dd>
    </dl>

</div>
</body>
</html>