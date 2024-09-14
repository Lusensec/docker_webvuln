<?php /* Smarty version 2.6.22, created on 2024-08-25 16:03:04
         compiled from menu.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>BlueCMS菜单</title>
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
        <dt><a href="" onclick="return showHide('common');" target="_self">常用操作</a></dt>
        <dd id="common" style="display:block;">
            <ul>
				<li><a href='article.php?act=add'>发布本地新闻</a></li>
				<li><a href='info.php?act=add1'>发布分类信息</a></li>
				<li><a href='flash.php'>首页flash</a></li>
				<li><a href='nav.php'>导航管理</a></li>
				<li><a href='ann.php'>网站信息</a></li>
				<li><a href='cache.php?act=clean'>更新缓存</a></li>
            </ul>
        </dd>
    </dl>
	<dl>
        <dt><a href="" onclick="return showHide('arc');" target="_self">本地新闻</a></dt>
        <dd id="arc" style="display:none;">
            <ul>
            	<li><a href='arc_cat.php'>新闻分类管理</a></li>
            	<li><a href="" onclick="return showHide('arc_cat');">新闻管理</a></li>
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
            	<li><a>还没有新闻分类</a></li><?php endif; ?>
            	</ul></dd>
            </ul>
        </dd>
    </dl>
    <dl>
        <dt><a href="" onclick="return showHide('content');" target="_self">分类信息</a></dt>
        <dd id="content" style="display:none;">
            <ul>
            <li><a href='category.php'>栏目列表</a></li>
            <li><a href="" onclick="return showHide('info');">信息管理</a></li>
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
			<li><a>还没有栏目分类</a></li><?php endif; ?>
			</ul></dd>
            <li><a href='model.php'>模型管理</a></li>
			<li><a href='attachment.php'>附加属性管理</a></li>
			<li><a href='area.php'>地区管理</a></li>
            </ul>
        </dd>
    </dl>
    <dl>
        <dt><a href="" onclick="return showHide('mod');" target="_self">模块管理</a></dt>
        <dd id="mod" style="display:none;">
            <ul>
            	<li><a href='comment.php'>评论管理</a></li>
				<li><a href='ad.php'>广告管理</a></li>
            	<li><a href='ad_phone.php'>电话广告位</a></li>
				<li><a href='link.php'>友情链接</a></li>
				<li><a href='uc_setting.php'>UC整合模块</a></li>
            </ul>
        </dd>
    </dl>
    <dl>
        <dt><a href="" onclick="return showHide('user');" target="_self">会员管理</a></dt>
        <dd id="user" style="display:none;">
            <ul>
				<li><a href='user.php'>会员列表</a></li>
				<li><a href='user.php?act=add'>添加会员</a></li>
				<li><a href="sys_user.php">系统组用户</a></li>
				<li><a href="ipbanned.php">禁止IP</a></li>
            </ul>
        </dd>
    </dl>
	<dl>
        <dt><a href="" onclick="return showHide('pay');" target="_self">充值中心</a></dt>
        <dd id="pay" style="display:none;">
            <ul>
				<li><a href="card.php">充值卡类型</a></li>
				<li><a href="service.php">服务价格</a></li>
				<li><a href="pay.php">支付类型</a></li>
            </ul>
        </dd>
    </dl>
    <dl>
        <dt><a href="" onclick="return showHide('sys');" target="_self">系统设置</a></dt>
        <dd id="sys" style="display:none;">
            <ul>
				<li><a href='setting.php'>站点设置</a></li>
				<li><a href='cache.php?act=set'>缓存设置</a></li>
				<li><a href='admin_log.php'>操作日志管理</a></li>
				<li><a href='tpl_manage.php'>模板管理</a></li>
				<li><a href='database.php'>数据库备份/还原</a></li>
            </ul>
        </dd>
    </dl>
    <dl>
        <dt><a href="" onclick="return showHide('help');" target="_self">系统帮助</a></dt>
        <dd id="help" style="display:none;">
            <ul>
				<li><a href='http://www.bluecms.net' target="_blank">官方首页</a></li>
				<li><a href='http://www.bluecms.net/bbs' target="_blank">官方论坛</a></li>
            </ul>
        </dd>
    </dl>

</div>
</body>
</html>