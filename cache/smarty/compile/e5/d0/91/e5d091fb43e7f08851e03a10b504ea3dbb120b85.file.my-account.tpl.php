<?php /* Smarty version Smarty-3.1.19, created on 2017-03-05 11:06:48
         compiled from "/home1/innaeffe/public_html/themes/theme1255/modules/blockwishlist/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93917744458bc3798b86aa2-84009875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5d091fb43e7f08851e03a10b504ea3dbb120b85' => 
    array (
      0 => '/home1/innaeffe/public_html/themes/theme1255/modules/blockwishlist/my-account.tpl',
      1 => 1450858586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93917744458bc3798b86aa2-84009875',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bc3798b9dd66_82744915',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bc3798b9dd66_82744915')) {function content_58bc3798b9dd66_82744915($_smarty_tpl) {?><!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a 	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<i class="fa fa-heart"></i>
		<span><?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
	</a>
</li>
<!-- END : MODULE WishList --><?php }} ?>
