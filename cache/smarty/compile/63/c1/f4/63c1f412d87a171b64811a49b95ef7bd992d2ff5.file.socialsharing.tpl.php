<?php /* Smarty version Smarty-3.1.19, created on 2017-03-05 12:11:23
         compiled from "/home1/innaeffe/public_html/themes/theme1255/modules/socialsharing/views/templates/hook/socialsharing.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28512823658bc46bbd41b85-46107447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63c1f412d87a171b64811a49b95ef7bd992d2ff5' => 
    array (
      0 => '/home1/innaeffe/public_html/themes/theme1255/modules/socialsharing/views/templates/hook/socialsharing.tpl',
      1 => 1450858586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28512823658bc46bbd41b85-46107447',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PS_SC_TWITTER' => 0,
    'PS_SC_FACEBOOK' => 0,
    'PS_SC_GOOGLE' => 0,
    'PS_SC_PINTEREST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bc46bbd7ae23_59188610',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bc46bbd7ae23_59188610')) {function content_58bc46bbd7ae23_59188610($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['PS_SC_TWITTER']->value||$_smarty_tpl->tpl_vars['PS_SC_FACEBOOK']->value||$_smarty_tpl->tpl_vars['PS_SC_GOOGLE']->value||$_smarty_tpl->tpl_vars['PS_SC_PINTEREST']->value) {?>
	<p class="socialsharing_product no-print">
		<?php if ($_smarty_tpl->tpl_vars['PS_SC_TWITTER']->value) {?>
			<button data-type="twitter" type="button" class="btn btn-twitter social-sharing">
				<i class="fa fa-twitter"></i>
			</button>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['PS_SC_FACEBOOK']->value) {?>
			<button data-type="facebook" type="button" class="btn btn-facebook social-sharing">
				<i class="fa fa-facebook"></i>
			</button>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['PS_SC_GOOGLE']->value) {?>
			<button data-type="google-plus" type="button" class="btn btn-google-plus social-sharing">
				<i class="fa fa-google-plus"></i>
			</button>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['PS_SC_PINTEREST']->value) {?>
			<button data-type="pinterest" type="button" class="btn btn-pinterest social-sharing">
				<i class="fa fa-pinterest"></i>
			</button>
		<?php }?>
	</p>
<?php }?><?php }} ?>
