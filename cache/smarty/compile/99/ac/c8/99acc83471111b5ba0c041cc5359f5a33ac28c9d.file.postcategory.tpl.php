<?php /* Smarty version Smarty-3.1.19, created on 2017-03-08 11:46:31
         compiled from "/home1/innaeffe/public_html/modules/smartblog/views/templates/front/postcategory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69168103658c03567036986-61764094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99acc83471111b5ba0c041cc5359f5a33ac28c9d' => 
    array (
      0 => '/home1/innaeffe/public_html/modules/smartblog/views/templates/front/postcategory.tpl',
      1 => 1450858586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69168103658c03567036986-61764094',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title_category' => 0,
    'navigationPipe' => 0,
    'postcategory' => 0,
    'smartdisablecatimg' => 0,
    'smartshownoimg' => 0,
    'categoryinfo' => 0,
    'cat_image' => 0,
    'activeimgincat' => 0,
    'category' => 0,
    'modules_dir' => 0,
    'pagenums' => 0,
    'k' => 0,
    'id_category' => 0,
    'cat_link_rewrite' => 0,
    'c' => 0,
    'options' => 0,
    'limit_start' => 0,
    'limit' => 0,
    'total' => 0,
    'smartcustomcss' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c0356731c067_11784116',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c0356731c067_11784116')) {function content_58c0356731c067_11784116($_smarty_tpl) {?>	<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><span class="navigation-page"><a href="<?php echo smartblog::GetSmartBlogLink('smartblog');?>
"><?php echo smartyTranslate(array('s'=>'All Blog News','mod'=>'smartblog'),$_smarty_tpl);?>
</a>
    <?php if ($_smarty_tpl->tpl_vars['title_category']->value!='') {?><span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><?php echo $_smarty_tpl->tpl_vars['title_category']->value;?>
<?php }?></span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    
    <?php if ($_smarty_tpl->tpl_vars['title_category']->value!='') {?><h1 class="page-heading"><?php echo $_smarty_tpl->tpl_vars['title_category']->value;?>
</h1><?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['postcategory']->value=='') {?>
        <?php if ($_smarty_tpl->tpl_vars['title_category']->value!='') {?>
             <p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'No Post in Category','mod'=>'smartblog'),$_smarty_tpl);?>
</p>
        <?php } else { ?>
             <p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'No Post in Blog','mod'=>'smartblog'),$_smarty_tpl);?>
</p>
        <?php }?>
    <?php } else { ?>
		<?php if ($_smarty_tpl->tpl_vars['smartdisablecatimg']->value=='1') {?>
        	<?php $_smarty_tpl->tpl_vars["activeimgincat"] = new Smarty_variable('0', null, 0);?>
            <?php $_smarty_tpl->tpl_vars['activeimgincat'] = new Smarty_variable($_smarty_tpl->tpl_vars['smartshownoimg']->value, null, 0);?> 
        	<?php if ($_smarty_tpl->tpl_vars['title_category']->value!='') {?>        
				<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoryinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
            		<div id="sdsblogCategory" class="clearfix">
               			<?php if (($_smarty_tpl->tpl_vars['cat_image']->value!="no"&&$_smarty_tpl->tpl_vars['activeimgincat']->value==0)||$_smarty_tpl->tpl_vars['activeimgincat']->value==1) {?>
                   			<img alt="<?php echo $_smarty_tpl->tpl_vars['category']->value['meta_title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['modules_dir']->value;?>
/smartblog/images/category/<?php echo $_smarty_tpl->tpl_vars['cat_image']->value;?>
-home-default.jpg" class="imageFeatured">
               			<?php }?>
                		<?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>

            		</div>
				<?php } ?>  
			<?php }?>
		<?php }?>

        <div id="smartblogcat" class="block">
            <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['postcategory']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                <?php echo $_smarty_tpl->getSubTemplate ("./category_loop.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('postcategory'=>$_smarty_tpl->tpl_vars['postcategory']->value), 0);?>

            <?php } ?>
        </div>
    
        <?php if (!empty($_smarty_tpl->tpl_vars['pagenums']->value)) {?>
            <div class="bottom-pagination-content clearfix">
            	<ul class="pagination pull-right">
                    <?php $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['k']->step = 1;$_smarty_tpl->tpl_vars['k']->total = (int) ceil(($_smarty_tpl->tpl_vars['k']->step > 0 ? $_smarty_tpl->tpl_vars['pagenums']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['pagenums']->value)+1)/abs($_smarty_tpl->tpl_vars['k']->step));
if ($_smarty_tpl->tpl_vars['k']->total > 0) {
for ($_smarty_tpl->tpl_vars['k']->value = 0, $_smarty_tpl->tpl_vars['k']->iteration = 1;$_smarty_tpl->tpl_vars['k']->iteration <= $_smarty_tpl->tpl_vars['k']->total;$_smarty_tpl->tpl_vars['k']->value += $_smarty_tpl->tpl_vars['k']->step, $_smarty_tpl->tpl_vars['k']->iteration++) {
$_smarty_tpl->tpl_vars['k']->first = $_smarty_tpl->tpl_vars['k']->iteration == 1;$_smarty_tpl->tpl_vars['k']->last = $_smarty_tpl->tpl_vars['k']->iteration == $_smarty_tpl->tpl_vars['k']->total;?>
                        <?php if ($_smarty_tpl->tpl_vars['title_category']->value!='') {?>
                            <?php $_smarty_tpl->tpl_vars["options"] = new Smarty_variable(null, null, 0);?>
                            <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['page'] = $_smarty_tpl->tpl_vars['k']->value+1;?>
                            <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['id_category'] = $_smarty_tpl->tpl_vars['id_category']->value;?>
                            <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['slug'] = $_smarty_tpl->tpl_vars['cat_link_rewrite']->value;?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars["options"] = new Smarty_variable(null, null, 0);?>
                            <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['page'] = $_smarty_tpl->tpl_vars['k']->value+1;?>
                        <?php }?>
                        <?php if (($_smarty_tpl->tpl_vars['k']->value+1)==$_smarty_tpl->tpl_vars['c']->value) {?>
                            <li class="active"><span class="page-active"><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</span></li>
                        <?php } else { ?>
                            <?php if ($_smarty_tpl->tpl_vars['title_category']->value!='') {?>
                                <li><a class="page-link" href="<?php echo smartblog::GetSmartBlogLink('smartblog_category_pagination',$_smarty_tpl->tpl_vars['options']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</a></li>
                            <?php } else { ?>
                                <li><a class="page-link" href="<?php echo smartblog::GetSmartBlogLink('smartblog_list_pagination',$_smarty_tpl->tpl_vars['options']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</a></li>
                            <?php }?>
                        <?php }?>
                    <?php }} ?>
                </ul>
                <div class="post-count"><?php echo smartyTranslate(array('s'=>"Showing",'mod'=>"smartblog"),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->tpl_vars['limit_start']->value!=0) {?><?php echo $_smarty_tpl->tpl_vars['limit_start']->value;?>
<?php } else { ?>1<?php }?> <?php echo smartyTranslate(array('s'=>"to",'mod'=>"smartlatestnews"),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->tpl_vars['limit_start']->value+$_smarty_tpl->tpl_vars['limit']->value>=$_smarty_tpl->tpl_vars['total']->value) {?><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['limit_start']->value+$_smarty_tpl->tpl_vars['limit']->value;?>
<?php }?> <?php echo smartyTranslate(array('s'=>"of",'mod'=>"smartblog"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
 <?php echo smartyTranslate(array('s'=>"Pages",'mod'=>"smartblog"),$_smarty_tpl);?>
)</div>
            </div>
        <?php }?>
    <?php }?>
    
    <?php if (isset($_smarty_tpl->tpl_vars['smartcustomcss']->value)) {?>
        <style>
            <?php echo $_smarty_tpl->tpl_vars['smartcustomcss']->value;?>

        </style>
    <?php }?><?php }} ?>
