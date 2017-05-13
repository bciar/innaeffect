<?php /* Smarty version Smarty-3.1.19, created on 2017-03-08 11:46:31
         compiled from "/home1/innaeffe/public_html/modules/smartblog/views/templates/front/category_loop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25287065758c0356733f138-01821461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '618650ac12ff1ed8b75d3b673fe3c697271baf86' => 
    array (
      0 => '/home1/innaeffe/public_html/modules/smartblog/views/templates/front/category_loop.tpl',
      1 => 1450858586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25287065758c0356733f138-01821461',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'post' => 0,
    'options' => 0,
    'smartshownoimg' => 0,
    'activeimgincat' => 0,
    'modules_dir' => 0,
    'smartshowauthor' => 0,
    'smartshowauthorstyle' => 0,
    'catlink' => 0,
    'title_category' => 0,
    'smartshowviewed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c03567426f37_02487719',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c03567426f37_02487719')) {function content_58c03567426f37_02487719($_smarty_tpl) {?><div itemtype="#" itemscope="" class="sdsarticleCat clearfix">
    
    <div id="smartblogpost-<?php echo $_smarty_tpl->tpl_vars['post']->value['id_post'];?>
">
    
        <?php $_smarty_tpl->tpl_vars["options"] = new Smarty_variable(null, null, 0);?>
        <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['id_post'] = $_smarty_tpl->tpl_vars['post']->value['id_post'];?> 
        <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['slug'] = $_smarty_tpl->tpl_vars['post']->value['link_rewrite'];?>
        
        <h2 class='title_block_exclusive'><a title="<?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
" href='<?php echo smartblog::GetSmartBlogLink('smartblog_post',$_smarty_tpl->tpl_vars['options']->value);?>
'><?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
</a></h2>
        
        <?php $_smarty_tpl->tpl_vars["options"] = new Smarty_variable(null, null, 0);?>
        <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['id_post'] = $_smarty_tpl->tpl_vars['post']->value['id_post'];?>
        <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['slug'] = $_smarty_tpl->tpl_vars['post']->value['link_rewrite'];?>
        <?php $_smarty_tpl->tpl_vars["catlink"] = new Smarty_variable(null, null, 0);?>
        <?php $_smarty_tpl->createLocalArrayVariable('catlink', null, 0);
$_smarty_tpl->tpl_vars['catlink']->value['id_category'] = $_smarty_tpl->tpl_vars['post']->value['id_category'];?>
        <?php $_smarty_tpl->createLocalArrayVariable('catlink', null, 0);
$_smarty_tpl->tpl_vars['catlink']->value['slug'] = $_smarty_tpl->tpl_vars['post']->value['cat_link_rewrite'];?>
        
        
        <div class="articleContent">
            <a href="<?php echo smartblog::GetSmartBlogLink('smartblog_post',$_smarty_tpl->tpl_vars['options']->value);?>
" itemprop="url" title="<?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
" class="imageFeaturedLink post-image">
                <?php $_smarty_tpl->tpl_vars["activeimgincat"] = new Smarty_variable('0', null, 0);?>
                <?php $_smarty_tpl->tpl_vars['activeimgincat'] = new Smarty_variable($_smarty_tpl->tpl_vars['smartshownoimg']->value, null, 0);?> 
                <?php if (($_smarty_tpl->tpl_vars['post']->value['post_img']!="no"&&$_smarty_tpl->tpl_vars['activeimgincat']->value==0)||$_smarty_tpl->tpl_vars['activeimgincat']->value==1) {?>
                    <img itemprop="image" alt="<?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['modules_dir']->value;?>
/smartblog/images/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_img'];?>
-single-default.jpg" class="imageFeatured img-responsive">
                <?php }?>
            </a>
            
            <div class="sdsarticle-des" itemprop="description">
                <?php $_smarty_tpl->tpl_vars["options"] = new Smarty_variable(null, null, 0);?>
                <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['id_post'] = $_smarty_tpl->tpl_vars['post']->value['id_post'];?>  
                <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['slug'] = $_smarty_tpl->tpl_vars['post']->value['link_rewrite'];?>  
                <?php echo $_smarty_tpl->tpl_vars['post']->value['short_description'];?>
 <a class="read-more" title="<?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
" href="<?php echo smartblog::GetSmartBlogLink('smartblog_post',$_smarty_tpl->tpl_vars['options']->value);?>
"><strong><?php echo smartyTranslate(array('s'=>'Read more...','mod'=>'smartblog'),$_smarty_tpl);?>
</strong></a>
            </div>
            
            <div class="articleHeader">
                <div class="postInfo">
                    
                    <?php if ($_smarty_tpl->tpl_vars['smartshowauthor']->value==1) {?>
                        <?php echo smartyTranslate(array('s'=>'Posted by','mod'=>'smartblog'),$_smarty_tpl);?>
 
                        <span itemprop="author">
                            <i class="fa fa-user"></i> 
                            <?php if ($_smarty_tpl->tpl_vars['smartshowauthorstyle']->value!=0) {?>
                                <?php echo $_smarty_tpl->tpl_vars['post']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value['lastname'];?>

                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['post']->value['lastname'];?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value['firstname'];?>

                            <?php }?>
                        </span>
                    <?php }?>
                    
                    <span itemprop="articleSection">
                    	<i class="fa fa-tags"></i>
                        <a href="<?php echo smartblog::GetSmartBlogLink('smartblog_category',$_smarty_tpl->tpl_vars['catlink']->value);?>
"><?php if ($_smarty_tpl->tpl_vars['title_category']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['title_category']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['post']->value['cat_name'];?>
<?php }?></a>
                    </span> 
                    
                    <span class="comment">
                        <i class="fa fa-comments"></i>
                        <a title="<?php echo $_smarty_tpl->tpl_vars['post']->value['totalcomment'];?>
 Comments" href="<?php echo smartblog::GetSmartBlogLink('smartblog_post',$_smarty_tpl->tpl_vars['options']->value);?>
#articleComments"><?php echo $_smarty_tpl->tpl_vars['post']->value['totalcomment'];?>
 <?php echo smartyTranslate(array('s'=>' Comments','mod'=>'smartblog'),$_smarty_tpl);?>
</a>
                    </span>
                    
                    <?php if ($_smarty_tpl->tpl_vars['smartshowviewed']->value==1) {?>
                        <span class="views">
                            <i class="fa fa-eye"></i> <?php echo smartyTranslate(array('s'=>' views','mod'=>'smartblog'),$_smarty_tpl);?>
 (<?php echo $_smarty_tpl->tpl_vars['post']->value['viewed'];?>
)
                        </span>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div><?php }} ?>
