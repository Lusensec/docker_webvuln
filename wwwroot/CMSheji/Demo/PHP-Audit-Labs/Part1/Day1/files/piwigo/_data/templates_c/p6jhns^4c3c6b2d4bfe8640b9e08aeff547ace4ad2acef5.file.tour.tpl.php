<?php /* Smarty version Smarty-3.1.13, created on 2024-07-08 23:54:50
         compiled from ".\plugins\TakeATour\tours\first_contact\tour.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24459668c0bcab9a299-20264345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c3c6b2d4bfe8640b9e08aeff547ace4ad2acef5' => 
    array (
      0 => '.\\plugins\\TakeATour\\tours\\first_contact\\tour.tpl',
      1 => 1412191741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24459668c0bcab9a299-20264345',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ABS_U_ADMIN' => 0,
    'TAT_restart' => 0,
    'TAT_path' => 0,
    'TAT_image_id' => 0,
    'TAT_FTP' => 0,
    'TAT_cat_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_668c0bcac48281_09091635',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_668c0bcac48281_09091635')) {function content_668c0bcac48281_09091635($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_script', array('require'=>'jquery.bootstrap-tour','load'=>"async")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>'jquery.bootstrap-tour','load'=>"async"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


var tour = new Tour({
  name: "first_contact",
  orphan: true,
  onEnd: function (tour) {window.location = "<?php echo $_smarty_tpl->tpl_vars['ABS_U_ADMIN']->value;?>
admin.php?page=plugin-TakeATour&tour_ended=first_contact"},
  template: "<div class='popover'>          <div class='arrow'></div>          <h3 class='popover-title'></h3>          <div class='popover-content'></div>          <div class='popover-navigation'>            <div class='btn-group'>              <button class='btn btn-sm btn-default' data-role='prev'>&laquo; <?php echo strtr(l10n('Prev'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
</button>              <button class='btn btn-sm btn-default' data-role='next'><?php echo strtr(l10n('Next '), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
 &raquo;</button>            </div>            <button class='btn btn-sm btn-default' data-role='end'><?php echo strtr(l10n('End tour'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
</button>          </div>        </div>",
});
<?php if ($_smarty_tpl->tpl_vars['TAT_restart']->value){?>tour.restart();<?php }?>

tour.addSteps([
  {
    path: "<?php echo $_smarty_tpl->tpl_vars['TAT_path']->value;?>
admin.php",
    title: "<?php echo strtr(l10n('first_contact_title1'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp1'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
  },
  {
    path: "<?php echo $_smarty_tpl->tpl_vars['TAT_path']->value;?>
admin.php",
    placement: "right",
    element: "a[href='./admin.php?page=photos_add']",
    reflex:true,
    title: "<?php echo strtr(l10n('first_contact_title2'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp2'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
  },
  {
    path: "<?php echo $_smarty_tpl->tpl_vars['TAT_path']->value;?>
admin.php?page=photos_add",
    placement: "bottom",
    element: ".selected_tab",
    title: "<?php echo strtr(l10n('first_contact_title3'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp3'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
  },
  {
    path: "<?php echo $_smarty_tpl->tpl_vars['TAT_path']->value;?>
admin.php?page=photos_add",
    placement: "right",
    element: "#albumSelection",
    title: "<?php echo strtr(l10n('first_contact_title4'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp4'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
  },
  {//5
    path: "<?php echo $_smarty_tpl->tpl_vars['TAT_path']->value;?>
admin.php?page=photos_add",
    placement: "top",
    element: "#addFiles",
    title: "<?php echo strtr(l10n('first_contact_title5'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp5'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
  },
  {
    path: "<?php echo $_smarty_tpl->tpl_vars['TAT_path']->value;?>
admin.php?page=photos_add",
    placement: "top",
    element: "#startUpload",
    title: "<?php echo strtr(l10n('first_contact_title6'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp6'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
  },
  {
    path: "<?php echo $_smarty_tpl->tpl_vars['TAT_path']->value;?>
admin.php?page=photos_add",
    placement: "top",
    element: "#afterUploadActions",
    title: "<?php echo strtr(l10n('first_contact_title7'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp7'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    prev:3,
    onPrev: function (tour) {window.location.reload()}
  },
  {
    path: "<?php echo $_smarty_tpl->tpl_vars['TAT_path']->value;?>
admin.php?page=photos_add",
    placement: "top",
    element: ".batchLink",
    reflex:true,
    title: "<?php echo strtr(l10n('first_contact_title8'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp8'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
  },
  {
    path: /admin\.php\?page=(photos_add|batch_manager&filter=prefilter-last_import|batch_manager&filter=prefilter-caddie)/,
    redirect:function (tour) {window.location = "admin.php?page=batch_manager&filter=prefilter-last_import";},
    placement: "bottom",
    element: "#filter_prefilter select",
    title: "<?php echo strtr(l10n('first_contact_title9'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp9'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    prev:3,
    onPrev: function (tour) {window.location = "<?php echo $_smarty_tpl->tpl_vars['ABS_U_ADMIN']->value;?>
admin.php?page=photos_add"}
 },
  {//10
    path: /admin\.php\?page=batch_manager&filter=(prefilter-caddie|prefilter-last_import)/,
    redirect:function (tour) {window.location = "admin.php?page=batch_manager&filter=prefilter-last_import";},
    placement: "right",
    element: "a[href='./admin.php?page=batch_manager&filter=prefilter-caddie']",
    title: "<?php echo strtr(l10n('first_contact_title10'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp10'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
  },
  {
    path: /admin\.php\?page=batch_manager&filter=(prefilter-caddie|prefilter-last_import)/,
    redirect:function (tour) {window.location = "admin.php?page=batch_manager&filter=prefilter-last_import";},
    placement: "left",
    element: "#checkActions",
    title: "<?php echo strtr(l10n('first_contact_title11'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp11'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
  },
  {
    path: /admin\.php\?page=batch_manager&filter=(prefilter-caddie|prefilter-last_import)/,
    redirect:function (tour) {window.location = "admin.php?page=batch_manager&filter=prefilter-last_import";},
    placement: "top",
    element: "#action",
    title: "<?php echo strtr(l10n('first_contact_title12'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp12'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
  },
  {
    path: /admin\.php\?page=batch_manager&filter=(prefilter-caddie|prefilter-last_import)/,
    redirect:function (tour) {window.location = "admin.php?page=batch_manager&filter=prefilter-last_import";},
    placement: "bottom",
    element: "#tabsheet .normal_tab",
    title: "<?php echo strtr(l10n('first_contact_title13'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp13'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
  },
  {
    path: /admin\.php\?page=batch_manager&filter=(prefilter-caddie|prefilter-last_import)/,
    redirect:function (tour) {window.location = "admin.php?page=batch_manager&filter=prefilter-last_import";},
    placement: "top",
    element: "#TAT_FC_14",
    reflex:true,
    title: "<?php echo strtr(l10n('first_contact_title14'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp14'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    onNext:function (tour) {window.location = "admin.php?page=photo-<?php echo $_smarty_tpl->tpl_vars['TAT_image_id']->value;?>
";}
  },
  {//15
    path: /admin\.php\?page=photo-/,
    redirect:function (tour) {window.location = "admin.php?page=photo-<?php echo $_smarty_tpl->tpl_vars['TAT_image_id']->value;?>
";},
    placement: "bottom",
    element: ".selected_tab",
    title: "<?php echo strtr(l10n('first_contact_title15'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp15'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
  },
  {
    path: /admin\.php\?page=photo-/,
    redirect:function (tour) {window.location = "admin.php?page=photo-<?php echo $_smarty_tpl->tpl_vars['TAT_image_id']->value;?>
";},
    placement: "top",
    element: "#TAT_FC_16",
    title: "<?php echo strtr(l10n('first_contact_title16'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp16'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
  },
  {
    path: /admin\.php\?page=photo-/,
    redirect:function (tour) {window.location = "admin.php?page=photo-<?php echo $_smarty_tpl->tpl_vars['TAT_image_id']->value;?>
";},
    placement: "top",
    element: "#TAT_FC_17",
    title: "<?php echo strtr(l10n('first_contact_title17'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp17'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
  },
  {
    path: /admin\.php\?page=photo-/,
    redirect:function (tour) {window.location = "admin.php?page=photo-<?php echo $_smarty_tpl->tpl_vars['TAT_image_id']->value;?>
";},
    placement: "top",
    title: "<?php echo strtr(l10n('first_contact_title18'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp18'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
  },
  {
    path: "<?php echo $_smarty_tpl->tpl_vars['TAT_path']->value;?>
admin.php?page=cat_list",
    title: "<?php echo strtr(l10n('first_contact_title19'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php if ($_smarty_tpl->tpl_vars['TAT_FTP']->value){?><?php echo strtr(l10n('first_contact_stp19'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
<?php }else{ ?><?php echo strtr(l10n('first_contact_stp19_b'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
<?php }?>",
    onPrev: function (tour) {window.location = "admin.php?page=photo-<?php echo $_smarty_tpl->tpl_vars['TAT_image_id']->value;?>
";},

  },
  {//20
    path: "<?php echo $_smarty_tpl->tpl_vars['TAT_path']->value;?>
admin.php?page=cat_list",
    placement: "top",
    element: "#categoryOrdering",
    title: "<?php echo strtr(l10n('first_contact_title20'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp20'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
  },
  {
    path: "<?php echo $_smarty_tpl->tpl_vars['TAT_path']->value;?>
admin.php?page=cat_list",
    placement: "left",
    element: "#tabsheet:first-child",
    title: "<?php echo strtr(l10n('first_contact_title21'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp21'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
  },
  {
    path: /admin\.php\?page=album-[0-9]+(|-properties)$/,
    redirect:function (tour) {window.location = "admin.php?page=album-<?php echo $_smarty_tpl->tpl_vars['TAT_cat_id']->value;?>
";},
    placement: "top",
    element: ".selected_tab",
    title: "<?php echo strtr(l10n('first_contact_title22'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp22'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
  },
  {
    path: /admin\.php\?page=album-[0-9]+(|-properties)$/,
    redirect:function (tour) {window.location = "admin.php?page=album-<?php echo $_smarty_tpl->tpl_vars['TAT_cat_id']->value;?>
";},
    placement: "top",
    element: "#TAT_FC_23",
    title: "<?php echo strtr(l10n('first_contact_title23'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp23'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
  },
  {
    path: /admin\.php\?page=album-[0-9]+(|-properties)$/,
    redirect:function (tour) {window.location = "admin.php?page=album-<?php echo $_smarty_tpl->tpl_vars['TAT_cat_id']->value;?>
";},
    placement: "top",
    title: "<?php echo strtr(l10n('first_contact_title28'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp28'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
  },
  {
    path: "<?php echo $_smarty_tpl->tpl_vars['TAT_path']->value;?>
admin.php?page=configuration",
    placement: "top",
    element: "",
    title: "<?php echo strtr(l10n('first_contact_title29'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp29'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
  },
  {//30
    path: "<?php echo $_smarty_tpl->tpl_vars['TAT_path']->value;?>
admin.php?page=configuration",
    placement: "right",
    element: "#gallery_title",
    title: "<?php echo strtr(l10n('first_contact_title30'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp30'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
  },
  {
    path: "<?php echo $_smarty_tpl->tpl_vars['TAT_path']->value;?>
admin.php?page=configuration",
    placement: "right",
    element: "#page_banner",
    title: "<?php echo strtr(l10n('first_contact_title31'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp31'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
  },
  {
    path: "<?php echo $_smarty_tpl->tpl_vars['TAT_path']->value;?>
admin.php?page=configuration",
    reflex: true,
    placement: "top",
    element: ".formButtons input",
    title: "<?php echo strtr(l10n('first_contact_title32'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp32'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
  },
  {
    path: "<?php echo $_smarty_tpl->tpl_vars['TAT_path']->value;?>
admin.php?page=configuration",
    placement: "bottom",
    element: "li.normal_tab:nth-child(6) > a:nth-child(1)",
    title: "<?php echo strtr(l10n('first_contact_title33'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp33'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    prev:30
  },
  {
    path: "<?php echo $_smarty_tpl->tpl_vars['TAT_path']->value;?>
admin.php?page=themes",
    placement: "top",
    element: "",
    title: "<?php echo strtr(l10n('first_contact_title34'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp34'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
  },
  {//35
    path: "<?php echo $_smarty_tpl->tpl_vars['TAT_path']->value;?>
admin.php?page=themes",
    placement: "top",
    element: "#TAT_FC_35",
    title: "<?php echo strtr(l10n('first_contact_title35'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp35'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
  },
  {
    path: "<?php echo $_smarty_tpl->tpl_vars['TAT_path']->value;?>
admin.php?page=themes",
    placement: "right",
    element: ".tabsheet",
    title: "<?php echo strtr(l10n('first_contact_title37'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp37'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
  },
  {
    path: "<?php echo $_smarty_tpl->tpl_vars['TAT_path']->value;?>
admin.php?page=plugins",
    placement: "left",
    element: "",
    title: "<?php echo strtr(l10n('first_contact_title38'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp38'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
  },
  {
    path: "<?php echo $_smarty_tpl->tpl_vars['TAT_path']->value;?>
admin.php?page=plugins",
    placement: "left",
    element: "#content",
    title: "<?php echo strtr(l10n('first_contact_title39'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp39'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
  },
  {//40
    path: "<?php echo $_smarty_tpl->tpl_vars['TAT_path']->value;?>
admin.php?page=plugins",
    placement: "bottom",
    element: "#TakeATour",
    title: "<?php echo strtr(l10n('first_contact_title40'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp40'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
  },
  {
    path: "<?php echo $_smarty_tpl->tpl_vars['TAT_path']->value;?>
admin.php?page=plugins",
    placement: "right",
    element: ".tabsheet",
    title: "<?php echo strtr(l10n('first_contact_title41'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp41'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
  },
  {
    path: "<?php echo $_smarty_tpl->tpl_vars['TAT_path']->value;?>
admin.php",
    title: "<?php echo strtr(l10n('first_contact_title43'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
    content: "<?php echo strtr(l10n('first_contact_stp43'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
  }
]);

// Initialize the tour
tour.init();

// Start the tour
tour.start();

jQuery( "#menubar > dl:nth-child(3) > dd > ul > li:nth-child(1) > a" ).click(function() {
  if (tour.getCurrentStep()==17)
  {
    tour.goTo(18);
  }
});
jQuery( "p.albumActions > a:nth-child(1)" ).click(function() {
  if (tour.getCurrentStep()==20)
  {
    tour.goTo(21);
  }
});


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>'jquery.bootstrap-tour','load'=>"async"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>