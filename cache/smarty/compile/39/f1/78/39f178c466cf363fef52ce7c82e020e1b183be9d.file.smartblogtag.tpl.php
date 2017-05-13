<?php /* Smarty version Smarty-3.1.19, created on 2017-03-06 12:21:40
         compiled from "/home1/innaeffe/public_html/modules/smartblogtag/views/templates/front/smartblogtag.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172904228058bd9aa4ecdc87-59958555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39f178c466cf363fef52ce7c82e020e1b183be9d' => 
    array (
      0 => '/home1/innaeffe/public_html/modules/smartblogtag/views/templates/front/smartblogtag.tpl',
      1 => 1450858586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172904228058bd9aa4ecdc87-59958555',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tags' => 0,
    'tag' => 0,
    'options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bd9aa501aef1_55444208',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bd9aa501aef1_55444208')) {function content_58bd9aa501aef1_55444208($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['tags']->value)&&!empty($_smarty_tpl->tpl_vars['tags']->value)) {?>
    <section id="tags_blog_block_left" class="block">
        <h4 class='title_block'><a href="<?php echo smartblog::GetSmartBlogLink('smartblog');?>
"><?php echo smartyTranslate(array('s'=>'Tags Post','mod'=>'smartblogtag'),$_smarty_tpl);?>
</a></h4>
        <div class="block_content clearfix">
            <?php  $_smarty_tpl->tpl_vars["tag"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["tag"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["tag"]->key => $_smarty_tpl->tpl_vars["tag"]->value) {
$_smarty_tpl->tpl_vars["tag"]->_loop = true;
?>
                <?php $_smarty_tpl->tpl_vars["options"] = new Smarty_variable(null, null, 0);?>
                <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['tag'] = $_smarty_tpl->tpl_vars['tag']->value['name'];?>
                <?php if ($_smarty_tpl->tpl_vars['tag']->value!='') {?>
                	<a href="<?php echo smartblog::GetSmartBlogLink('smartblog_tag',$_smarty_tpl->tpl_vars['options']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</a>
                <?php }?>
            <?php } ?>
        </div>
    </section>
<?php }?><?php }} ?>
