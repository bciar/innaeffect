<?php /* Smarty version Smarty-3.1.19, created on 2017-03-07 22:22:30
         compiled from "/home1/innaeffe/public_html/modules/blocksharefb/blocksharefb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154923573758bf78f6cba027-02368054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42227438781dfb50c24a34afa7cad206331265c1' => 
    array (
      0 => '/home1/innaeffe/public_html/modules/blocksharefb/blocksharefb.tpl',
      1 => 1488941848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154923573758bf78f6cba027-02368054',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_link' => 0,
    'product_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bf78f6d05f69_41865052',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bf78f6d05f69_41865052')) {function content_58bf78f6d05f69_41865052($_smarty_tpl) {?>

<li id="left_share_fb">
	<a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['product_link']->value;?>
&amp;t=<?php echo $_smarty_tpl->tpl_vars['product_title']->value;?>
" class="_blank"><?php echo smartyTranslate(array('s'=>'Share on Facebook!','mod'=>'blocksharefb'),$_smarty_tpl);?>
</a>
</li><?php }} ?>
