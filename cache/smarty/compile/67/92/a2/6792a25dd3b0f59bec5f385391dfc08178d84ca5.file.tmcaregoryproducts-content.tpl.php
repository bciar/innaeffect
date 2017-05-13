<?php /* Smarty version Smarty-3.1.19, created on 2017-03-05 13:50:54
         compiled from "/home1/innaeffe/public_html/modules/tmcategoryproducts//views/templates/hook/tmcaregoryproducts-content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174400534558bc5e0e863ce8-91220674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6792a25dd3b0f59bec5f385391dfc08178d84ca5' => 
    array (
      0 => '/home1/innaeffe/public_html/modules/tmcategoryproducts//views/templates/hook/tmcaregoryproducts-content.tpl',
      1 => 1450858586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174400534558bc5e0e863ce8-91220674',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'content' => 0,
    'class' => 0,
    'tab_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bc5e0e90ba99_79847219',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bc5e0e90ba99_79847219')) {function content_58bc5e0e90ba99_79847219($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['items']->value)&&$_smarty_tpl->tpl_vars['items']->value) {?>
	<?php  $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content']->key => $_smarty_tpl->tpl_vars['content']->value) {
$_smarty_tpl->tpl_vars['content']->_loop = true;
?>
    	<?php if (isset($_smarty_tpl->tpl_vars['content']->value['products'])&&$_smarty_tpl->tpl_vars['content']->value['products']) {?>
            <?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable($_smarty_tpl->tpl_vars['content']->value['products'], null, 0);?>
            <?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("tab-pane tab-category-".((string)$_smarty_tpl->tpl_vars['content']->value['id']), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['tab_id'] = new Smarty_variable("tab-category-".((string)$_smarty_tpl->tpl_vars['content']->value['id']), null, 0);?>
        	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>$_smarty_tpl->tpl_vars['class']->value,'id'=>$_smarty_tpl->tpl_vars['tab_id']->value), 0);?>

        <?php } else { ?>
        	<ul id="tab-category-<?php echo $_smarty_tpl->tpl_vars['content']->value['id'];?>
" class="tab-category-<?php echo $_smarty_tpl->tpl_vars['content']->value['id'];?>
 tab-pane">
          		<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No producs in this category.','mod'=>'tmcategoryproducts'),$_smarty_tpl);?>
</li>
            </ul>
        <?php }?>
    <?php } ?>
<?php }?><?php }} ?>
