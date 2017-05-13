<?php /* Smarty version Smarty-3.1.19, created on 2017-03-07 22:04:59
         compiled from "/home1/innaeffe/public_html/modules/blocknewsletter/views/templates/admin/list_action_viewcustomer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143965580958bf74db7339a1-88575074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aeb06875aa910af2daa6b17283fd041b8878d469' => 
    array (
      0 => '/home1/innaeffe/public_html/modules/blocknewsletter/views/templates/admin/list_action_viewcustomer.tpl',
      1 => 1487614379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143965580958bf74db7339a1-88575074',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'disable' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bf74db7a7889_51516005',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bf74db7a7889_51516005')) {function content_58bf74db7a7889_51516005($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit btn btn-default <?php if ($_smarty_tpl->tpl_vars['disable']->value) {?>disabled<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
