<?php /* Smarty version Smarty-3.1.13, created on 2024-07-08 23:54:04
         compiled from ".\themes\default\template\mail\text\plain\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29326668c0b9c911263-51524262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ba38701ef7dd8056aafed409e12f22aed5f2850' => 
    array (
      0 => '.\\themes\\default\\template\\mail\\text\\plain\\footer.tpl',
      1 => 1383679409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29326668c0b9c911263-51524262',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GALLERY_TITLE' => 0,
    'GALLERY_URL' => 0,
    'VERSION' => 0,
    'PHPWG_URL' => 0,
    'CONTACT_MAIL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_668c0b9c91d649_31224003',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_668c0b9c91d649_31224003')) {function content_668c0b9c91d649_31224003($_smarty_tpl) {?>


----
<?php echo l10n('Sent by');?>
 "<?php echo $_smarty_tpl->tpl_vars['GALLERY_TITLE']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['GALLERY_URL']->value;?>

<?php echo l10n('Powered by');?>
 "Piwigo<?php if (!empty($_smarty_tpl->tpl_vars['VERSION']->value)){?> <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
<?php }?>" <?php echo $_smarty_tpl->tpl_vars['PHPWG_URL']->value;?>

<?php echo l10n('Contact');?>
: <?php echo $_smarty_tpl->tpl_vars['CONTACT_MAIL']->value;?>
<?php }} ?>