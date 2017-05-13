<?php /* Smarty version Smarty-3.1.19, created on 2017-03-05 13:50:54
         compiled from "/home1/innaeffe/public_html/modules/tmcategoryproducts//views/templates/hook/tmcaregoryproducts-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185548880958bc5e0e5231e2-07876800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e62fca3549aa29e25fff94ee3231f0c0c4464ca' => 
    array (
      0 => '/home1/innaeffe/public_html/modules/tmcategoryproducts//views/templates/hook/tmcaregoryproducts-tab.tpl',
      1 => 1450858586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185548880958bc5e0e5231e2-07876800',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'headings' => 0,
    'heading' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bc5e0e5573d8_00624813',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bc5e0e5573d8_00624813')) {function content_58bc5e0e5573d8_00624813($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['headings']->value)&&$_smarty_tpl->tpl_vars['headings']->value) {?>
	<?php  $_smarty_tpl->tpl_vars['heading'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['heading']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['headings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['heading']->key => $_smarty_tpl->tpl_vars['heading']->value) {
$_smarty_tpl->tpl_vars['heading']->_loop = true;
?>
    	<li class="tab-category-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['heading']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
">
        	<a class="tab-category-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['heading']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" href="#tab-category-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['heading']->value['id'], ENT_QUOTES, 'utf-8', true);?>
" data-toggle="tab"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['heading']->value['name'], ENT_QUOTES, 'utf-8', true);?>
</a>
        </li>
    <?php } ?>
<?php }?><?php }} ?>
