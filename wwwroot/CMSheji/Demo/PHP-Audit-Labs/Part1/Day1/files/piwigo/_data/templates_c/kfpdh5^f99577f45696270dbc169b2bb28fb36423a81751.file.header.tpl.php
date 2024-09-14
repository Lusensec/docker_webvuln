<?php /* Smarty version Smarty-3.1.13, created on 2024-07-08 23:54:04
         compiled from ".\themes\default\template\mail\text\plain\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17986668c0b9c8fae20-99971541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f99577f45696270dbc169b2bb28fb36423a81751' => 
    array (
      0 => '.\\themes\\default\\template\\mail\\text\\plain\\header.tpl',
      1 => 1383679409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17986668c0b9c8fae20-99971541',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAIL_TITLE' => 0,
    'MAIL_SUBTITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_668c0b9c902c28_71284072',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_668c0b9c902c28_71284072')) {function content_668c0b9c902c28_71284072($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['MAIL_TITLE']->value;?>

<?php if (!empty($_smarty_tpl->tpl_vars['MAIL_SUBTITLE']->value)){?><?php echo $_smarty_tpl->tpl_vars['MAIL_SUBTITLE']->value;?>

<?php }?>
----

<?php }} ?>