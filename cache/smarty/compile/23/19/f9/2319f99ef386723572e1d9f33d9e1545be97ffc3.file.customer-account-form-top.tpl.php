<?php /* Smarty version Smarty-3.1.19, created on 2017-03-05 21:49:54
         compiled from "/home1/innaeffe/public_html/modules/tmsociallogin/views/templates/hook/customer-account-form-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14406411258bcce5221e914-18383433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2319f99ef386723572e1d9f33d9e1545be97ffc3' => 
    array (
      0 => '/home1/innaeffe/public_html/modules/tmsociallogin/views/templates/hook/customer-account-form-top.tpl',
      1 => 1450858586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14406411258bcce5221e914-18383433',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'f_status' => 0,
    'link' => 0,
    'g_status' => 0,
    'back' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bcce522bbe28_10230858',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bcce522bbe28_10230858')) {function content_58bcce522bbe28_10230858($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['f_status']->value) {?>
    <a class="btn btn-default btn-sm btn-login-facebook" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('tmsociallogin','facebookregistration',array(),true);?>
" title="<?php echo smartyTranslate(array('s'=>'Register with Your Facebook Account','mod'=>'tmsociallogin'),$_smarty_tpl);?>
">
         <?php echo smartyTranslate(array('s'=>'Register with Your Facebook Account','mod'=>'tmsociallogin'),$_smarty_tpl);?>

    </a>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['g_status']->value) {?>
    <a class="btn btn-default btn-sm btn-login-google" <?php if (isset($_smarty_tpl->tpl_vars['back']->value)&&$_smarty_tpl->tpl_vars['back']->value) {?>href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('tmsociallogin','googlelogin',array('back'=>$_smarty_tpl->tpl_vars['back']->value),true);?>
"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('tmsociallogin','googlelogin',array(),true);?>
"<?php }?> title="<?php echo smartyTranslate(array('s'=>'Register with Your Google Account','mod'=>'tmsociallogin'),$_smarty_tpl);?>
">
         <?php echo smartyTranslate(array('s'=>'Register with Your Google Account','mod'=>'tmsociallogin'),$_smarty_tpl);?>

    </a>
<?php }?>
<?php }} ?>
