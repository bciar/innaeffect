<?php /* Smarty version Smarty-3.1.19, created on 2017-03-07 10:13:26
         compiled from "/home1/innaeffe/public_html/admin123/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111461263658bece16132db6-31177016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcc0dda7c4f18f48f7e8dfc32bfd9c93b2656ebb' => 
    array (
      0 => '/home1/innaeffe/public_html/admin123/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1446157012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111461263658bece16132db6-31177016',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bece1614c959_90625145',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bece1614c959_90625145')) {function content_58bece1614c959_90625145($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
