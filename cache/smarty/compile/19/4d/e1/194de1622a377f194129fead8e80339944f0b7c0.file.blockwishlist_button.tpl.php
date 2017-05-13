<?php /* Smarty version Smarty-3.1.19, created on 2017-03-05 11:42:11
         compiled from "/home1/innaeffe/public_html/themes/theme1255/modules/blockwishlist/blockwishlist_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191298168558bc3fe33aa972-38121065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '194de1622a377f194129fead8e80339944f0b7c0' => 
    array (
      0 => '/home1/innaeffe/public_html/themes/theme1255/modules/blockwishlist/blockwishlist_button.tpl',
      1 => 1450858586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191298168558bc3fe33aa972-38121065',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bc3fe33c32c4_88212558',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bc3fe33c32c4_88212558')) {function content_58bc3fe33c32c4_88212558($_smarty_tpl) {?><div class="wishlist">
	<a class="addToWishlist wishlistProd_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" href="#" rel="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', false, 1); return false;" title="<?php echo smartyTranslate(array('s'=>'Add to Wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<?php echo smartyTranslate(array('s'=>'','mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
</div><?php }} ?>
