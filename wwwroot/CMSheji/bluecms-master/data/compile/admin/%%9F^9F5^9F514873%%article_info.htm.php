<?php /* Smarty version 2.6.22, created on 2024-08-25 16:03:29
         compiled from article_info.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript">
function change(e){
var color = document.getElementById('color');
	color.value = e.innerHTML;
}
function check()
{
	if(article_form.title.value=='')
	{
		alert("���ű��ⲻ��Ϊ�գ�");
		article_form.title.focus();
		return false;
	}
	if(article_form.cat.value=='')
	{
		alert('���ŷ��಻��Ϊ��!');
		article_form.cat.focus();
		return false;
	}
}
</script>
<p class="action_nav">BlueCMS�������� - <?php echo $this->_tpl_vars['current_act']; ?>
</p>
<form method="post" action="article.php" name="article_form" enctype="multipart/form-data" onsubmit="return check();">
<?php if ($this->_tpl_vars['act'] == 'add'): ?>
<table width="80%">
  <tr>
    <td><span class="warning">*</span>&nbsp;���ű���:</td>
    <td><input type="text" name="title" size="40" value="" /></td>
  </tr>
  <tr>
    <td>��ɫ:</td>
    <td><input type="text" name="color" value="" id="color" />(<span style="color:#000000;cursor:hand" onClick="return change(this);">#000000</span> <span style="color:#FFFF00;cursor:hand" onClick="return change(this);">#FFFF00</span> <span style="color:#006600;cursor:hand" onClick="return change(this);">#006600</span> <span style="color:#0000FF;cursor:hand" onClick="return change(this);">#0000FF</span> <span style="color:#FF0000;cursor:hand" onClick="return change(this);">#FF0000</span> <span style="color:#CC0000;cursor:hand" onClick="return change(this);">#CC0000</span>)</td>
  </tr>
  <tr>
  	<td><span class="warning">*</span>&nbsp;����:</td>
  	<td><select name="cid">
  		<option value="">��ѡ�����ŷ���</option>
  		<?php echo $this->_tpl_vars['cat_option']; ?>
</select></td>
  </tr>
  <tr>
    <td>����:</td>
    <td><input type="text" name="author" value="" /></td>
  </tr>
  <tr>
    <td>��Դ��:</td>
    <td><input type="text" name="source" value="" /></td>
  </tr>
  <tr>
  	<td>����ͼ:</td>
  	<td><input type="file" name="lit_pic" size="30" value="" /></td>
  </tr>
  <tr>
  	<td>�Ƿ��Ƽ�:</td>
  	<td><select name="is_recommend">
  			<option value="0" selected>��</option>
  			<option value="1">��</option>
  		</select></td>
  </tr>
  <tr>
  	<td>�Ƿ����:</td>
  	<td><select name="is_check">
  			<option value="1" selected>�����</option>
  			<option value="0">δ���</option></select></td>
  </tr>
  <tr>
  	<td>���¸�Ҫ:</td>
  	<td><textarea name="descript" rows="6" cols="40"></textarea></td>
  </tr>
  <tr>
    <td><span class="warning">*</span>&nbsp;�������ݣ�</td>
    <td><?php echo $this->_tpl_vars['editor_html']; ?>
</td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <input type="submit" value="�ύ" class="button" />
      <input type="reset" value="����" class="button" />
      <input type="hidden" name="act" value="do_add" />
    </td>
  </tr>
</table>
<?php endif; ?>
<?php if ($this->_tpl_vars['act'] == 'edit'): ?>
<table width="80%">
  <tr>
    <td><span class="warning">*</span>&nbsp;���ű���:</td>
    <td><input type="text" name="title" size="40" value="<?php echo $this->_tpl_vars['article']['title']; ?>
" /></td>
  </tr>
  <tr>
    <td>��ɫ:</td>
    <td><input type="text" name="color" value="<?php echo $this->_tpl_vars['article']['color']; ?>
" id="color" />(<span style="color:#000000;cursor:hand" onClick="return change(this);">#000000</span> <span style="color:#FFFF00;cursor:hand" onClick="return change(this);">#FFFF00</span> <span style="color:#006600;cursor:hand" onClick="return change(this);">#006600</span> <span style="color:#0000FF;cursor:hand" onClick="return change(this);">#0000FF</span> <span style="color:#FF0000;cursor:hand" onClick="return change(this);">#FF0000</span> <span style="color:#CC0000;cursor:hand" onClick="return change(this);">#CC0000</span>)</td>
  </tr>
  <tr>
  	<td><span class="warning">*</span>&nbsp;���ࣺ</td>
  	<td><select name="cid">
  		<option value="">��ѡ�����ŷ���</option>
  		<?php echo $this->_tpl_vars['cat_option']; ?>
</select></td>
  </tr>
  <tr>
    <td>����:</td>
    <td><input type="text" name="author" value="<?php echo $this->_tpl_vars['article']['author']; ?>
" /></td>
  </tr>
  <tr>
    <td>��Դ��:</td>
    <td><input type="text" name="source" value="<?php echo $this->_tpl_vars['article']['source']; ?>
" /></td>
  </tr>
  <tr>
  	<td>����ͼ:</td>
  	<td><?php if ($this->_tpl_vars['article']['lit_pic']): ?><input type="text" name="lit_pic1" size="40" value="<?php echo $this->_tpl_vars['article']['lit_pic']; ?>
" readonly /><br><?php endif; ?><input type="file" name="lit_pic2" size="30" value="" /></td>
  </tr>
  <tr>
  	<td>�Ƿ��Ƽ�:</td>
  	<td><select name="is_recommend">
  			<option value="0" <?php if ($this->_tpl_vars['article']['is_recommend'] == 0): ?>selected<?php endif; ?>>��</option>
  			<option value="1" <?php if ($this->_tpl_vars['article']['is_recommend'] == 1): ?>selected<?php endif; ?>>��</option>
  		</select></td>
  </tr>
  <tr>
  	<td>�Ƿ����:</td>
  	<td><select name="is_check">
  			<option value="0" <?php if ($this->_tpl_vars['article']['is_check'] == 0): ?>selected<?php endif; ?>>δ���</option>
  			<option value="1" <?php if ($this->_tpl_vars['article']['is_check'] == 1): ?>selected<?php endif; ?>> �����</option></select></td>
  </tr>
  <tr>
  	<td>���¸�Ҫ��</td>
  	<td><textarea name="descript" rows="6" cols="40"><?php echo $this->_tpl_vars['article']['descript']; ?>
</textarea></td>
  </tr>
  <tr>
    <td><span class="warning">*</span>&nbsp;�������ݣ�</td>
    <td><?php echo $this->_tpl_vars['editor_html']; ?>
</td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <input type="submit" value="�ύ" class="button" />
      <input type="reset" value="����" class="button" />
      <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['article']['id']; ?>
" />
      <input type="hidden" name="act" value="do_edit" />
    </td>
  </tr>
</table>
<?php endif; ?>
</form>
<br/>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>