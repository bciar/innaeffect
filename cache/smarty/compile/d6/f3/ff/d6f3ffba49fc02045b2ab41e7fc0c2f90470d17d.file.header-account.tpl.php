<?php /* Smarty version Smarty-3.1.19, created on 2017-03-05 11:06:48
         compiled from "/home1/innaeffe/public_html/modules/tmsociallogin/views/templates/hook/header-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57501587058bc3798d18836-65389599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6f3ffba49fc02045b2ab41e7fc0c2f90470d17d' => 
    array (
      0 => '/home1/innaeffe/public_html/modules/tmsociallogin/views/templates/hook/header-account.tpl',
      1 => 1450858586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57501587058bc3798d18836-65389599',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'f_status' => 0,
    'back' => 0,
    'back_page' => 0,
    'g_status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bc3798da7f70_67430663',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bc3798da7f70_67430663')) {function content_58bc3798da7f70_67430663($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['back_page'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index'), ENT_QUOTES, 'UTF-8', true), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['f_status']->value) {?>
    <a class="btn btn-default btn-sm btn-login-facebook" <?php if (isset($_smarty_tpl->tpl_vars['back']->value)&&$_smarty_tpl->tpl_vars['back']->value) {?>href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('tmsociallogin','facebooklogin',array(),true);?>
"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('tmsociallogin','facebooklogin',array('back'=>$_smarty_tpl->tpl_vars['back_page']->value),true);?>
"<?php }?> title="<?php echo smartyTranslate(array('s'=>'Login with Your Facebook Account','mod'=>'tmsociallogin'),$_smarty_tpl);?>
">
         <?php echo smartyTranslate(array('s'=>'Facebook Login','mod'=>'tmsociallogin'),$_smarty_tpl);?>

    </a>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['g_status']->value) {?>
    <a class="btn btn-default btn-sm btn-login-google" <?php if (isset($_smarty_tpl->tpl_vars['back']->value)&&$_smarty_tpl->tpl_vars['back']->value) {?>href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('tmsociallogin','googlelogin',array('back'=>$_smarty_tpl->tpl_vars['back']->value),true);?>
"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('tmsociallogin','googlelogin',array('back'=>$_smarty_tpl->tpl_vars['back_page']->value),true);?>
"<?php }?> title="<?php echo smartyTranslate(array('s'=>'Login with Your Google Account','mod'=>'tmsociallogin'),$_smarty_tpl);?>
">
         <?php echo smartyTranslate(array('s'=>'Google Login','mod'=>'tmsociallogin'),$_smarty_tpl);?>

    </a>
<?php }?><?php }} ?>
