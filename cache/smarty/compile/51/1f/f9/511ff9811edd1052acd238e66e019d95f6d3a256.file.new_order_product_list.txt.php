<?php /* Smarty version Smarty-3.1.19, created on 2017-03-09 22:14:17
         compiled from "/home1/innaeffe/public_html/modules/ruqop/mails/en/new_order_product_list.txt" */ ?>
<?php /*%%SmartyHeaderCode:191624631158c21a098d5001-08477487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '511ff9811edd1052acd238e66e019d95f6d3a256' => 
    array (
      0 => '/home1/innaeffe/public_html/modules/ruqop/mails/en/new_order_product_list.txt',
      1 => 1489115490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191624631158c21a098d5001-08477487',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c21a099161a7_36935873',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c21a099161a7_36935873')) {function content_58c21a099161a7_36935873($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
Product: <?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>

Price: <?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>


<?php } ?><?php }} ?>
