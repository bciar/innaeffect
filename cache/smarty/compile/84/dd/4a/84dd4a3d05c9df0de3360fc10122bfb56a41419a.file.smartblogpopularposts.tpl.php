<?php /* Smarty version Smarty-3.1.19, created on 2017-03-06 12:21:40
         compiled from "/home1/innaeffe/public_html/modules/smartblogpopularposts/views/templates/front/smartblogpopularposts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45547194858bd9aa4b28f02-29425614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84dd4a3d05c9df0de3360fc10122bfb56a41419a' => 
    array (
      0 => '/home1/innaeffe/public_html/modules/smartblogpopularposts/views/templates/front/smartblogpopularposts.tpl',
      1 => 1450858586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45547194858bd9aa4b28f02-29425614',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'posts' => 0,
    'post' => 0,
    'options' => 0,
    'modules_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bd9aa4c59af0_05939674',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bd9aa4c59af0_05939674')) {function content_58bd9aa4c59af0_05939674($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home1/innaeffe/public_html/tools/smarty/plugins/modifier.date_format.php';
?><?php if (isset($_smarty_tpl->tpl_vars['posts']->value)&&!empty($_smarty_tpl->tpl_vars['posts']->value)) {?>
    <section id="blogPopular" class="block">
        <h4 class='title_block'><a href="<?php echo smartblog::GetSmartBlogLink('smartblog');?>
"><?php echo smartyTranslate(array('s'=>'Popular Articles','mod'=>'smartblogpopularposts'),$_smarty_tpl);?>
</a></h4>
            <div class="block_content products-block">
                <ul>
                    <?php  $_smarty_tpl->tpl_vars["post"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["post"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["post"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["post"]->iteration=0;
 $_smarty_tpl->tpl_vars["post"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["post"]->key => $_smarty_tpl->tpl_vars["post"]->value) {
$_smarty_tpl->tpl_vars["post"]->_loop = true;
 $_smarty_tpl->tpl_vars["post"]->iteration++;
 $_smarty_tpl->tpl_vars["post"]->index++;
 $_smarty_tpl->tpl_vars["post"]->first = $_smarty_tpl->tpl_vars["post"]->index === 0;
 $_smarty_tpl->tpl_vars["post"]->last = $_smarty_tpl->tpl_vars["post"]->iteration === $_smarty_tpl->tpl_vars["post"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posts']['first'] = $_smarty_tpl->tpl_vars["post"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posts']['last'] = $_smarty_tpl->tpl_vars["post"]->last;
?>
                        <?php $_smarty_tpl->tpl_vars["options"] = new Smarty_variable(null, null, 0);?>
                        <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['id_post'] = $_smarty_tpl->tpl_vars['post']->value['id_smart_blog_post'];?>
                        <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['slug'] = $_smarty_tpl->tpl_vars['post']->value['link_rewrite'];?>
                        <li class="clearfix<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['posts']['last']) {?> last_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['posts']['first']) {?> first_item<?php } else { ?><?php }?>">
                            <a class="products-block-image" title="<?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
" href="<?php echo smartblog::GetSmartBlogLink('smartblog_post',$_smarty_tpl->tpl_vars['options']->value);?>
">
                            	<img alt="<?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['modules_dir']->value;?>
/smartblog/images/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_img'];?>
-home-small.jpg">
                            </a>
                            <div class="product-content">
                            	<a class="post-name" title="<?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
" href="<?php echo smartblog::GetSmartBlogLink('smartblog_post',$_smarty_tpl->tpl_vars['options']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
</a>
                            	<span class="info"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['created'],"%b %d, %Y");?>
</span>
                            </div>
                        </li> 
                    <?php } ?>
                </ul>
            </div>
    </section>
<?php }?><?php }} ?>
