<?php /* Smarty version Smarty-3.1.19, created on 2017-03-05 13:50:54
         compiled from "/home1/innaeffe/public_html/themes/theme1255/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146583398358bc5e0e5764f7-33340595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58831d96ce979493f5c14c794061d5becf273838' => 
    array (
      0 => '/home1/innaeffe/public_html/themes/theme1255/modules/homefeatured/homefeatured.tpl',
      1 => 1450858586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146583398358bc5e0e5764f7-33340595',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bc5e0e5b5566_01472672',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bc5e0e5b5566_01472672')) {function content_58bc5e0e5b5566_01472672($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
