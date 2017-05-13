<?php /* Smarty version Smarty-3.1.19, created on 2017-03-07 22:26:52
         compiled from "/home1/innaeffe/public_html/modules/tmsocialfeeds/views/templates/admin/items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171921041258bf79fc56a155-83062050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '831e2b527b0cd78e18c18ad1ef9d9a954e03b5de' => 
    array (
      0 => '/home1/innaeffe/public_html/modules/tmsocialfeeds/views/templates/admin/items.tpl',
      1 => 1450858586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171921041258bf79fc56a155-83062050',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'htmlitems' => 0,
    'type' => 0,
    'langItems' => 0,
    'hook' => 0,
    'hookItems' => 0,
    'admin_path' => 0,
    'hItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bf79fc68e907_13744142',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bf79fc68e907_13744142')) {function content_58bf79fc68e907_13744142($_smarty_tpl) {?><script type="text/javascript">
	var closeText = "<?php echo smartyTranslate(array('s'=>'Close','mod'=>'themeconfigurator'),$_smarty_tpl);?>
";
</script>
<ul class="nav nav-tabs">
	<?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['htmlitems']->value['type']['all']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->_loop = true;
?>
		<li id="soc-<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['type']->value==$_smarty_tpl->tpl_vars['htmlitems']->value['type']['default']) {?> active<?php }?>">
			<a href="#items-<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-toggle="tab"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>
		</li>
	<?php } ?>
</ul>
<div class="socials-items tab-content">
<?php  $_smarty_tpl->tpl_vars['langItems'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['langItems']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['htmlitems']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['langItems']->key => $_smarty_tpl->tpl_vars['langItems']->value) {
$_smarty_tpl->tpl_vars['langItems']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['langItems']->key;
?>
	<div id="items-<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="lang-content tab-pane  <?php if ($_smarty_tpl->tpl_vars['type']->value==$_smarty_tpl->tpl_vars['htmlitems']->value['type']['default']) {?> active<?php }?>" >
	<?php  $_smarty_tpl->tpl_vars['hookItems'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hookItems']->_loop = false;
 $_smarty_tpl->tpl_vars['hook'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['langItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hookItems']->key => $_smarty_tpl->tpl_vars['hookItems']->value) {
$_smarty_tpl->tpl_vars['hookItems']->_loop = true;
 $_smarty_tpl->tpl_vars['hook']->value = $_smarty_tpl->tpl_vars['hookItems']->key;
?>
		<h4 class="hook-title clearfix"><?php echo smartyTranslate(array('s'=>'Hook','mod'=>'themeconfigurator'),$_smarty_tpl);?>
 "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['hookItems']->value) {?><button class="editItem btn btn-default pull-right"><?php echo smartyTranslate(array('s'=>'Edit item','mod'=>'themeconfigurator'),$_smarty_tpl);?>
</button><?php } else { ?><button class="addItem btn btn-success pull-right"><?php echo smartyTranslate(array('s'=>'Add item','mod'=>'themeconfigurator'),$_smarty_tpl);?>
</button><?php }?></h4>
        <?php if ($_smarty_tpl->tpl_vars['hookItems']->value) {?>
            <?php  $_smarty_tpl->tpl_vars['hItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hookItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hItem']->key => $_smarty_tpl->tpl_vars['hItem']->value) {
$_smarty_tpl->tpl_vars['hItem']->_loop = true;
?>
                <?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['admin_path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp4."items_".((string)$_smarty_tpl->tpl_vars['hItem']->value['item_type']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php } ?>
        <?php } else { ?>
        	<?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['admin_path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp5=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp5."new_".((string)$_smarty_tpl->tpl_vars['type']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>
	<?php } ?>
	</div>
<?php } ?>
</div>
<?php }} ?>
