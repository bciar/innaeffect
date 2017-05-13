<?php /* Smarty version Smarty-3.1.19, created on 2017-03-05 11:06:46
         compiled from "/home1/innaeffe/public_html/modules/tmmegamenu/views/templates/hook/items/banner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149117747458bc3796d79c27-15025179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6603718dce972b8e3e22deca7e9683f8cc46c83' => 
    array (
      0 => '/home1/innaeffe/public_html/modules/tmmegamenu/views/templates/hook/items/banner.tpl',
      1 => 1450858586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149117747458bc3796d79c27-15025179',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banner' => 0,
    'image_baseurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bc3796dc6200_78635268',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bc3796dc6200_78635268')) {function content_58bc3796dc6200_78635268($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['banner']->value)&&$_smarty_tpl->tpl_vars['banner']->value) {?>
	<li <?php if ($_smarty_tpl->tpl_vars['banner']->value['specific_class']) {?>class="<?php echo $_smarty_tpl->tpl_vars['banner']->value['specific_class'];?>
"<?php }?>>
    	<a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" <?php if ($_smarty_tpl->tpl_vars['banner']->value['blank']) {?>target="_blank"<?php }?>>
        	<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['image_baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['banner']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['title'];?>
" />
        </a>
    </li>
<?php }?>
<?php }} ?>
