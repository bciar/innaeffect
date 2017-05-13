<?php /* Smarty version Smarty-3.1.19, created on 2017-03-05 12:11:24
         compiled from "/home1/innaeffe/public_html/modules/tmproductvideos/views/templates/hooks/tmproductvideos_tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75012120158bc46bc268bb4-88491836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2b76abc7accf3f8d80644e7d41280aeb37eba78' => 
    array (
      0 => '/home1/innaeffe/public_html/modules/tmproductvideos/views/templates/hooks/tmproductvideos_tab.tpl',
      1 => 1450858586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75012120158bc46bc268bb4-88491836',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'videos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bc46bc27af35_18545868',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bc46bc27af35_18545868')) {function content_58bc46bc27af35_18545868($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['videos']->value)&&$_smarty_tpl->tpl_vars['videos']->value) {?>
    <li class="product-video-tab">
        <a href="#product-video-tab-content" data-toggle="tab"><?php if (count($_smarty_tpl->tpl_vars['videos']->value)>1) {?><?php echo smartyTranslate(array('s'=>'Videos','mod'=>'tmproductvideos'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Video','mod'=>'tmproductvideos'),$_smarty_tpl);?>
<?php }?></a>
    </li>
<?php }?><?php }} ?>
