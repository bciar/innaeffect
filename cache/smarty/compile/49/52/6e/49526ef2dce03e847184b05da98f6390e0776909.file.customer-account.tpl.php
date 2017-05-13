<?php /* Smarty version Smarty-3.1.19, created on 2017-03-05 11:06:48
         compiled from "/home1/innaeffe/public_html/modules/tmsociallogin/views/templates/hook/customer-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29141687158bc3798ba4841-05103931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49526ef2dce03e847184b05da98f6390e0776909' => 
    array (
      0 => '/home1/innaeffe/public_html/modules/tmsociallogin/views/templates/hook/customer-account.tpl',
      1 => 1450858586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29141687158bc3798ba4841-05103931',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'f_status' => 0,
    'link' => 0,
    'facebook_status' => 0,
    'g_status' => 0,
    'back' => 0,
    'google_status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bc3798c1b554_17517569',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bc3798c1b554_17517569')) {function content_58bc3798c1b554_17517569($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['f_status']->value) {?>
    <li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('tmsociallogin','facebooklink',array(),true);?>
" title="<?php echo smartyTranslate(array('s'=>'Facebook Login Manager','mod'=>'tmsociallogin'),$_smarty_tpl);?>
">
           <i class="fa fa-facebook"></i>
           <span><?php if ($_smarty_tpl->tpl_vars['facebook_status']->value) {?><?php echo smartyTranslate(array('s'=>'Connect Whith Facebook','mod'=>'tmsociallogin'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Facebook Login Manager','mod'=>'tmsociallogin'),$_smarty_tpl);?>
<?php }?></span>
        </a>
    </li>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['g_status']->value) {?>
    <li>
        <a <?php if (isset($_smarty_tpl->tpl_vars['back']->value)&&$_smarty_tpl->tpl_vars['back']->value) {?>href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('tmsociallogin','googlelogin',array('back'=>$_smarty_tpl->tpl_vars['back']->value),true);?>
"<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('tmsociallogin','googlelogin',array(),true);?>
"<?php }?> title="<?php echo smartyTranslate(array('s'=>'Google Login Manager','mod'=>'tmsociallogin'),$_smarty_tpl);?>
">
            <i class="fa fa-google"></i>
            <span><?php if ($_smarty_tpl->tpl_vars['google_status']->value) {?><?php echo smartyTranslate(array('s'=>'Connect Whith Google','mod'=>'tmsociallogin'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Google Login Manager','mod'=>'tmsociallogin'),$_smarty_tpl);?>
<?php }?></span>
        </a>
    </li>
<?php }?>
<?php }} ?>
