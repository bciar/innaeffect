<?php /* Smarty version Smarty-3.1.19, created on 2017-03-05 11:42:11
         compiled from "/home1/innaeffe/public_html/modules/tmlistingimages/views/templates/hooks/tmlistingimages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56872634358bc3fe32cb4b8-19443181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '852974d52cea64ffa424c8011295792071c17a04' => 
    array (
      0 => '/home1/innaeffe/public_html/modules/tmlistingimages/views/templates/hooks/tmlistingimages.tpl',
      1 => 1450858586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56872634358bc3fe32cb4b8-19443181',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_images' => 0,
    'product' => 0,
    'image' => 0,
    'imageId' => 0,
    'link' => 0,
    'imageTitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bc3fe3336060_71872946',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bc3fe3336060_71872946')) {function content_58bc3fe3336060_71872946($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['product_images']->value)>1) {?>
	<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
		<?php $_smarty_tpl->tpl_vars['imageId'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['product']->value['id_product'])."-".((string)$_smarty_tpl->tpl_vars['image']->value['id_image']), null, 0);?>
		<?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])) {?>
			<?php $_smarty_tpl->tpl_vars['imageTitle'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8', true), null, 0);?>
		<?php } else { ?>
			<?php $_smarty_tpl->tpl_vars['imageTitle'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['name'], null, 0);?>
       <?php }?>
	   <?php if ($_smarty_tpl->tpl_vars['image']->value['cover']!=1) {?>
            <img class="img-responsive hover-image" id="thumb-<?php echo $_smarty_tpl->tpl_vars['image']->value['id_image'];?>
" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['imageId']->value,'tm_home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['imageTitle']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['imageTitle']->value;?>
" itemprop="image" />
            <?php break 1?>
       <?php }?>
    <?php } ?>
<?php }?><?php }} ?>
