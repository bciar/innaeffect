<?php /* Smarty version Smarty-3.1.19, created on 2017-03-05 11:03:09
         compiled from "/home1/innaeffe/public_html/admin123/themes/default/template/helpers/list/list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65001149558bc36bd637873-95608343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8eb4d0448b38971589bd8eafc8e0a5766c84a49d' => 
    array (
      0 => '/home1/innaeffe/public_html/admin123/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1446157012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65001149558bc36bd637873-95608343',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bc36bd64cda9_40240811',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bc36bd64cda9_40240811')) {function content_58bc36bd64cda9_40240811($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
