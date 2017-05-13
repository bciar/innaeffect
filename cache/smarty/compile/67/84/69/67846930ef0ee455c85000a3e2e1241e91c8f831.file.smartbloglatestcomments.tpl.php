<?php /* Smarty version Smarty-3.1.19, created on 2017-03-06 12:21:40
         compiled from "/home1/innaeffe/public_html/modules/smartbloglatestcomments/views/templates/front/smartbloglatestcomments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32075818258bd9aa48bc9c0-15218569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67846930ef0ee455c85000a3e2e1241e91c8f831' => 
    array (
      0 => '/home1/innaeffe/public_html/modules/smartbloglatestcomments/views/templates/front/smartbloglatestcomments.tpl',
      1 => 1450858586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32075818258bd9aa48bc9c0-15218569',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'latesComments' => 0,
    'comment' => 0,
    'options' => 0,
    'modules_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bd9aa4a0b5f6_45271516',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bd9aa4a0b5f6_45271516')) {function content_58bd9aa4a0b5f6_45271516($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['latesComments']->value)&&!empty($_smarty_tpl->tpl_vars['latesComments']->value)) {?>
    <section id="latestComments" class="block">
        <h4 class='title_block'><?php echo smartyTranslate(array('s'=>'Latest Comments','mod'=>'smartbloglatestcomments'),$_smarty_tpl);?>
</h4>
        <div class="block_content products-block">
            <ul>
                <?php  $_smarty_tpl->tpl_vars["comment"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["comment"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['latesComments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["comment"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["comment"]->iteration=0;
 $_smarty_tpl->tpl_vars["comment"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["comment"]->key => $_smarty_tpl->tpl_vars["comment"]->value) {
$_smarty_tpl->tpl_vars["comment"]->_loop = true;
 $_smarty_tpl->tpl_vars["comment"]->iteration++;
 $_smarty_tpl->tpl_vars["comment"]->index++;
 $_smarty_tpl->tpl_vars["comment"]->first = $_smarty_tpl->tpl_vars["comment"]->index === 0;
 $_smarty_tpl->tpl_vars["comment"]->last = $_smarty_tpl->tpl_vars["comment"]->iteration === $_smarty_tpl->tpl_vars["comment"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['comments']['first'] = $_smarty_tpl->tpl_vars["comment"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['comments']['last'] = $_smarty_tpl->tpl_vars["comment"]->last;
?>
                    <?php $_smarty_tpl->tpl_vars["options"] = new Smarty_variable(null, null, 0);?>
                    <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['id_post'] = $_smarty_tpl->tpl_vars['comment']->value['id_post'];?>
                    <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['slug'] = $_smarty_tpl->tpl_vars['comment']->value['slug'];?>
                    <li class="clearfix<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['comments']['last']) {?> last_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['comments']['first']) {?> first_item<?php } else { ?><?php }?>">
                    	<a class="products-block-image" title="" href="<?php echo smartblog::GetSmartBlogLink('smartblog_post',$_smarty_tpl->tpl_vars['options']->value);?>
">
                    		<img alt="Avatar" src="<?php echo $_smarty_tpl->tpl_vars['modules_dir']->value;?>
/smartblog/images/avatar/avatar-author-default.jpg">
                        </a>
                        <div class="product-content">
                            <?php echo $_smarty_tpl->tpl_vars['comment']->value['name'];?>
 <strong><?php echo smartyTranslate(array('s'=>'on','mod'=>'smartbloglatestcomments'),$_smarty_tpl);?>
</strong>
                            <a href="<?php echo smartblog::GetSmartBlogLink('smartblog_post',$_smarty_tpl->tpl_vars['options']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>
</a>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </section>
<?php }?><?php }} ?>
