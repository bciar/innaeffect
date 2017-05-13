<?php /* Smarty version Smarty-3.1.19, created on 2017-03-11 02:51:32
         compiled from "/home1/innaeffe/public_html/themes/theme1255/store_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25674423258c3ac845cf672-92701335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a96a15536b49b93edd0a1aa5795f9e9ef6a57070' => 
    array (
      0 => '/home1/innaeffe/public_html/themes/theme1255/store_infos.tpl',
      1 => 1450858586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25674423258c3ac845cf672-92701335',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'days_datas' => 0,
    'one_day' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c3ac84640867_58849580',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c3ac84640867_58849580')) {function content_58c3ac84640867_58849580($_smarty_tpl) {?>

<?php  $_smarty_tpl->tpl_vars['one_day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['days_datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one_day']->key => $_smarty_tpl->tpl_vars['one_day']->value) {
$_smarty_tpl->tpl_vars['one_day']->_loop = true;
?>
	<p>
		<strong class="dark"><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['one_day']->value['day']),$_smarty_tpl);?>
: </strong> 
        &nbsp;
        <span><?php echo $_smarty_tpl->tpl_vars['one_day']->value['hours'];?>
</span>
	</p>
<?php } ?>

<?php }} ?>
