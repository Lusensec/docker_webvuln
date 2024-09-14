<?php /* Smarty version Smarty-3.1.13, created on 2024-07-08 23:54:55
         compiled from ".\plugins\TakeATour\tpl\js_css.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8493668c0bcf75ae68-84441683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b97deecb31d8c5b7f6092543415a9ffcbac7a8b9' => 
    array (
      0 => '.\\plugins\\TakeATour\\tpl\\js_css.tpl',
      1 => 1404837706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8493668c0bcf75ae68-84441683',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ADMIN_THEME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_668c0bcf7c4f60_69485720',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_668c0bcf7c4f60_69485720')) {function content_668c0bcf7c4f60_69485720($_smarty_tpl) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.bootstrap-tour','load'=>'header','require'=>'jquery','path'=>'plugins/TakeATour/js/custom-bootstrap-tour-standalone.js'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"plugins/TakeATour/css/bootstrap-tour-standalone.css"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['ADMIN_THEME']->value=='clear'){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"plugins/TakeATour/css/clear.css"),$_smarty_tpl);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['ADMIN_THEME']->value=='roma'){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"plugins/TakeATour/css/roma.css"),$_smarty_tpl);?>
<?php }?><?php }} ?>