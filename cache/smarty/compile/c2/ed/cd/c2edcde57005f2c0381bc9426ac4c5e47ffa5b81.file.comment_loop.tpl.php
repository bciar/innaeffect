<?php /* Smarty version Smarty-3.1.19, created on 2017-03-08 15:50:12
         compiled from "/home1/innaeffe/public_html/modules/smartblog/views/templates/front/comment_loop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100978769858c06e8418cff2-75261179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2edcde57005f2c0381bc9426ac4c5e47ffa5b81' => 
    array (
      0 => '/home1/innaeffe/public_html/modules/smartblog/views/templates/front/comment_loop.tpl',
      1 => 1450858586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100978769858c06e8418cff2-75261179',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comment' => 0,
    'modules_dir' => 0,
    'comment_status' => 0,
    'childcommnets' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c06e8446fef7_53811589',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c06e8446fef7_53811589')) {function content_58c06e8446fef7_53811589($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home1/innaeffe/public_html/tools/smarty/plugins/modifier.date_format.php';
?><?php if ($_smarty_tpl->tpl_vars['comment']->value['id_smart_blog_comment']!='') {?>
    <ul class="commentList">
        <li id="comment-<?php echo $_smarty_tpl->tpl_vars['comment']->value['id_smart_blog_comment'];?>
" class="even">
        	<div class="well">
            	<div class="comment-content clearfix">
                    <img class="avatar" alt="Avatar" src="<?php echo $_smarty_tpl->tpl_vars['modules_dir']->value;?>
/smartblog/images/avatar/avatar-author-default.jpg">
                    <?php if (Configuration::get('smartenablecomment')==1) {?>
                        <?php if ($_smarty_tpl->tpl_vars['comment_status']->value==1) {?>
                            <div class="reply pull-right">
                                <a onclick="return addComment.moveForm('comment-<?php echo $_smarty_tpl->tpl_vars['comment']->value['id_smart_blog_comment'];?>
', '<?php echo $_smarty_tpl->tpl_vars['comment']->value['id_smart_blog_comment'];?>
', 'respond', '<?php echo $_GET['id_post'];?>
')"  class="comment-reply-link btn btn-default btn-sm"><span><?php echo smartyTranslate(array('s'=>'Reply','mod'=>'smartblog'),$_smarty_tpl);?>
</span></a>
                                
                            </div>
                        <?php }?>
                    <?php }?>
                    <div class="name"><strong><?php echo $_smarty_tpl->tpl_vars['childcommnets']->value['name'];?>
</strong></div>
                    
                    <div class="created">
                        <span itemprop="commentTime"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['childcommnets']->value['created']);?>
</span>
                    </div>
                    
                    <p><?php echo $_smarty_tpl->tpl_vars['childcommnets']->value['content'];?>
</p>
            	</div>
            </div>
            <?php if (isset($_smarty_tpl->tpl_vars['childcommnets']->value['child_comments'])) {?>
                <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['childcommnets']->value['child_comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>  
                    <?php if (isset($_smarty_tpl->tpl_vars['childcommnets']->value['child_comments'])) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("./comment_loop.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('childcommnets'=>$_smarty_tpl->tpl_vars['comment']->value), 0);?>
 
                        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
                    <?php }?>
                <?php } ?>
            <?php }?>
        </li>
    </ul>
<?php }?> <?php }} ?>
