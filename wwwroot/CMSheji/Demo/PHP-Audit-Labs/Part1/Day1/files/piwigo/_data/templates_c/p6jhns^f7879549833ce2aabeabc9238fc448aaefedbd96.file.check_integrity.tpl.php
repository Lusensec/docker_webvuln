<?php /* Smarty version Smarty-3.1.13, created on 2024-07-08 23:54:51
         compiled from ".\admin\themes\default\template\check_integrity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3291668c0bcb02c654-74038214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7879549833ce2aabeabc9238fc448aaefedbd96' => 
    array (
      0 => '.\\admin\\themes\\default\\template\\check_integrity.tpl',
      1 => 1292334937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3291668c0bcb02c654-74038214',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'c13y_list' => 0,
    'c13y' => 0,
    'c13y_show_submit_ignore' => 0,
    'c13y_do_check' => 0,
    'ID' => 0,
    'c13y_show_submit_automatic_correction' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_668c0bcb06e596_39596051',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_668c0bcb06e596_39596051')) {function content_668c0bcb06e596_39596051($_smarty_tpl) {?><dl>
  <dt><?php echo l10n('Check integrity');?>
</dt>
  <dd>
    <ul>
      <form method="post" name="c13y" id="c13y" action="">
      <fieldset>
        <table class="table2">
          <tr class="throw">
            <th></th>
            <th><?php echo l10n('Anomaly');?>
</th>
            <th><?php echo l10n('Correction');?>
</th>
          </tr>
<?php if (isset($_smarty_tpl->tpl_vars['c13y_list']->value)){?>
<?php  $_smarty_tpl->tpl_vars['c13y'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c13y']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['c13y_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['c13y_loop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['c13y']->key => $_smarty_tpl->tpl_vars['c13y']->value){
$_smarty_tpl->tpl_vars['c13y']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['c13y_loop']['index']++;
?>
              <tr class="<?php if ((1 & $_smarty_tpl->getVariable('smarty')->value['foreach']['c13y_loop']['index'])){?>row1<?php }else{ ?>row2<?php }?>">
                <td>
<?php if ($_smarty_tpl->tpl_vars['c13y']->value['can_select']){?>
                    <input type="checkbox" name="c13y_selection[]" value="<?php echo $_smarty_tpl->tpl_vars['c13y']->value['id'];?>
" id="c13y_selection-<?php echo $_smarty_tpl->tpl_vars['c13y']->value['id'];?>
"><label for="c13y_selection-<?php echo $_smarty_tpl->tpl_vars['c13y']->value['id'];?>
"></label>
<?php }?>
                </td>
                <td><label for="c13y_selection-<?php echo $_smarty_tpl->tpl_vars['c13y']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['c13y']->value['anomaly'];?>
</label></td>
                <td>
                  <label for="c13y_selection-<?php echo $_smarty_tpl->tpl_vars['c13y']->value['id'];?>
">
<?php if ($_smarty_tpl->tpl_vars['c13y']->value['show_ignore_msg']){?>
                      <?php echo l10n('The anomaly will be ignored until next application version');?>

                      <br>
                      <?php echo l10n('Correction the anomaly will cancel the fact that it\'s ignored');?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['c13y']->value['show_correction_fct']){?>
                      <?php echo l10n('Automatic correction');?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['c13y']->value['show_correction_bad_fct']){?>
                      <?php echo l10n('Impossible automatic correction');?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['c13y']->value['show_correction_success_fct']){?>
                      <?php echo l10n('Correction applied with success');?>

<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['c13y']->value['correction_error_fct'])){?>
                      <?php echo l10n('Correction applied with error');?>

                      <br>
                      <?php echo $_smarty_tpl->tpl_vars['c13y']->value['c13y']['correction_error_fct'];?>

<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['c13y']->value['correction_msg'])){?>
<?php if ($_smarty_tpl->tpl_vars['c13y']->value['show_correction_success_fct']||!empty($_smarty_tpl->tpl_vars['c13y']->value['correction_error_fct'])||$_smarty_tpl->tpl_vars['c13y']->value['show_correction_fct']||$_smarty_tpl->tpl_vars['c13y']->value['show_correction_bad_fct']){?>
                        <br>
<?php }?>
                      <?php echo nl2br($_smarty_tpl->tpl_vars['c13y']->value['correction_msg']);?>

<?php }?>
                  </label>
                </td>
              </tr>
<?php } ?>
<?php }?>
        </table>

        <p>
			
			<script type="text/javascript">
			jQuery(document).ready(function(){

				jQuery("#checkAllLink").click(function () {
					jQuery("#c13y input[type=checkbox]").attr('checked', true);
					return false;
				});

				jQuery("#uncheckAllLink").click(function () {
					jQuery("#c13y input[type=checkbox]").attr('checked', false);
					return false;
				});

			});
			function DeselectAll( formulaire )
			{
				var elts = formulaire.elements;
				for(var i=0; i <elts.length; i++)
				{
					if (elts[i].type=='checkbox')
						elts[i].checked = false;
				}
			}
			</script>
			
<?php if ($_smarty_tpl->tpl_vars['c13y_show_submit_ignore']->value){?>
              <a href="#" id="checkAllLink"><?php echo l10n('Check all');?>
</a>
            / <a href="#" id="uncheckAllLink"><?php echo l10n('Uncheck all');?>
</a>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['c13y_do_check']->value)){?>
            / <a href="#" onclick="DeselectAll(document.getElementById('c13y'));
<?php  $_smarty_tpl->tpl_vars['ID'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ID']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['c13y_do_check']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ID']->key => $_smarty_tpl->tpl_vars['ID']->value){
$_smarty_tpl->tpl_vars['ID']->_loop = true;
?>
              document.getElementById('c13y_selection-<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
').checked = true;
<?php } ?>
            return false;"><?php echo l10n('Check automatic corrections');?>
</a>
<?php }?>
        </p>

        <p>
<?php if ($_smarty_tpl->tpl_vars['c13y_show_submit_automatic_correction']->value){?>
            <input class="submit" type="submit" value="<?php echo l10n('Apply selected corrections');?>
" name="Apply selected corrections">
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['c13y_show_submit_ignore']->value){?>
            <input class="submit" type="submit" value="<?php echo l10n('Ignore selected anomalies');?>
" name="Ignore selected anomalies">
<?php }?>
          <input class="submit" type="submit" value="<?php echo l10n('Refresh');?>
" name="Refresh">
          </p>

      </fieldset>
      </form>
    </ul>
  </dd>
<?php }} ?>