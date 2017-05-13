<?php /* Smarty version Smarty-3.1.19, created on 2017-03-06 12:21:41
         compiled from "/home1/innaeffe/public_html/modules/smartblog/views/templates/front/posts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99821441058bd9aa5ce36c2-51857117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4c3709e43de2e8d7c935e796fd5fe7c5ad265b2' => 
    array (
      0 => '/home1/innaeffe/public_html/modules/smartblog/views/templates/front/posts.tpl',
      1 => 1450858586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99821441058bd9aa5ce36c2-51857117',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'navigationPipe' => 0,
    'meta_title' => 0,
    'smartshownoimg' => 0,
    'post_img' => 0,
    'activeimgincat' => 0,
    'modules_dir' => 0,
    'content' => 0,
    'tags' => 0,
    'tag' => 0,
    'options' => 0,
    'id_category' => 0,
    'cat_link_rewrite' => 0,
    'smartshowauthor' => 0,
    'smartshowauthorstyle' => 0,
    'firstname' => 0,
    'lastname' => 0,
    'created' => 0,
    'catOptions' => 0,
    'title_category' => 0,
    'countcomment' => 0,
    'HOOK_SMART_BLOG_POST_FOOTER' => 0,
    'comments' => 0,
    'comment' => 0,
    'comment_status' => 0,
    'id_post' => 0,
    'smartcustomcss' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bd9aa5ee1c26_09873636',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bd9aa5ee1c26_09873636')) {function content_58bd9aa5ee1c26_09873636($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home1/innaeffe/public_html/tools/smarty/plugins/modifier.date_format.php';
?><?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?>
    <span class="navigation-page">
	<a href="<?php echo smartblog::GetSmartBlogLink('smartblog');?>
"><?php echo smartyTranslate(array('s'=>'All Blog News','mod'=>'smartblog'),$_smarty_tpl);?>
</a>
    <span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span>
    <?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>

    </span>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<div itemtype="#" itemscope="" id="sdsblogArticle" class="blog-post">
	
    <h1 class="title_block_exclusive"><?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
</h1>
    
    <div itemprop="articleBody">
    	<?php $_smarty_tpl->tpl_vars["activeimgincat"] = new Smarty_variable('0', null, 0);?>
    	<?php $_smarty_tpl->tpl_vars['activeimgincat'] = new Smarty_variable($_smarty_tpl->tpl_vars['smartshownoimg']->value, null, 0);?> 
    	
        <?php if (($_smarty_tpl->tpl_vars['post_img']->value!="no"&&$_smarty_tpl->tpl_vars['activeimgincat']->value==0)||$_smarty_tpl->tpl_vars['activeimgincat']->value==1) {?>
    		<div class="post-image">
    			<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['modules_dir']->value;?>
/smartblog/images/<?php echo $_smarty_tpl->tpl_vars['post_img']->value;?>
-single-default.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
">
    		</div>
    	<?php }?>
    
    	<div class="sdsarticle-des">
    		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    	</div>
    
    	<?php if ($_smarty_tpl->tpl_vars['tags']->value!='') {?>
    		<div class="sdstags-update">
    			<span class="tags">
    				<b><?php echo smartyTranslate(array('s'=>'Tags:','mod'=>'smartblog'),$_smarty_tpl);?>
 </b> 
    				<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
    					<?php $_smarty_tpl->tpl_vars["options"] = new Smarty_variable(null, null, 0);?>
    					<?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['tag'] = $_smarty_tpl->tpl_vars['tag']->value['name'];?>
    					<a title="tag" href="<?php echo smartblog::GetSmartBlogLink('smartblog_tag',$_smarty_tpl->tpl_vars['options']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</a>
    				<?php } ?>
    			</span>
    		</div>
    	<?php }?>
    </div>
    
    <div class="articleHeader">
		<div class="postInfo">
			<?php $_smarty_tpl->tpl_vars["catOptions"] = new Smarty_variable(null, null, 0);?>
            <?php $_smarty_tpl->createLocalArrayVariable('catOptions', null, 0);
$_smarty_tpl->tpl_vars['catOptions']->value['id_category'] = $_smarty_tpl->tpl_vars['id_category']->value;?>
            <?php $_smarty_tpl->createLocalArrayVariable('catOptions', null, 0);
$_smarty_tpl->tpl_vars['catOptions']->value['slug'] = $_smarty_tpl->tpl_vars['cat_link_rewrite']->value;?>

            <?php if ($_smarty_tpl->tpl_vars['smartshowauthor']->value==1) {?>
                
                <?php echo smartyTranslate(array('s'=>'Posted by ','mod'=>'smartblog'),$_smarty_tpl);?>

                <span itemprop="author">
                	<i class="fa fa-user"></i> 
            		<?php if ($_smarty_tpl->tpl_vars['smartshowauthorstyle']->value!=0) {?>
                		<?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>

                    <?php } else { ?>
                    	<?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>

                    <?php }?>
                </span> 
			<?php }?>
			
            <span itemprop="dateCreated">
            	<i class="fa fa-calendar"></i>
                &nbsp;<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['created']->value);?>

            </span> 
                 
            <span itemprop="articleSection">
               <i class="fa fa-tags"></i>
               <a href="<?php echo smartblog::GetSmartBlogLink('smartblog_category',$_smarty_tpl->tpl_vars['catOptions']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['title_category']->value;?>
</a>
            </span> 
             
            <span class="comments">   
                <i class="fa fa-comments"></i> 
                <?php if ($_smarty_tpl->tpl_vars['countcomment']->value!='') {?>
                    <?php echo $_smarty_tpl->tpl_vars['countcomment']->value;?>

                <?php } else { ?>
                   0
                <?php }?>
                <?php echo smartyTranslate(array('s'=>' Comments','mod'=>'smartblog'),$_smarty_tpl);?>

			</span>
            
        	<a title="" style="display:none" itemprop="url" href="#"></a>
		</div>
	</div>
    
	<div class="sdsarticleBottom">
    	<?php echo $_smarty_tpl->tpl_vars['HOOK_SMART_BLOG_POST_FOOTER']->value;?>

	</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['countcomment']->value!='') {?>
	<div id="articleComments" class="block">
    	<h2 class="title_block"><?php if ($_smarty_tpl->tpl_vars['countcomment']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['countcomment']->value;?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'0','mod'=>'smartblog'),$_smarty_tpl);?>
<?php }?><?php echo smartyTranslate(array('s'=>' Comments','mod'=>'smartblog'),$_smarty_tpl);?>
</h2>
		<div id="comments">      
			<div class="commentList">
				<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
                	<?php echo $_smarty_tpl->getSubTemplate ("./comment_loop.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('childcommnets'=>$_smarty_tpl->tpl_vars['comment']->value), 0);?>

				<?php } ?>
            </div>
        </div>
	</div>
<?php }?>

<?php if (Configuration::get('smartenablecomment')==1) {?>
	<?php if ($_smarty_tpl->tpl_vars['comment_status']->value==1) {?>
		<div class="smartblogcomments" id="respond">
			<h4 class="comment-reply-title page-subheading" id="reply-title"><?php echo smartyTranslate(array('s'=>'Leave a Reply','mod'=>'smartblog'),$_smarty_tpl);?>
 
        		<small style="float:right;">
                	<a style="display: none;" href="/wp/sellya/sellya/this-is-a-post-with-preview-image/#respond" id="cancel-comment-reply-link" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Cancel Reply','mod'=>'smartblog'),$_smarty_tpl);?>
</a>
            	</small>
        	</h4>
		
        	<div id="commentInput">
            	<p><span class="required"><?php echo smartyTranslate(array('s'=>'All fields are required','mod'=>'smartblog'),$_smarty_tpl);?>
</span></p>
            	<form action="" method="post" id="commentform">
					<table>
						<tbody>
                        	<tr>
                            	<td> 
                                    <b><?php echo smartyTranslate(array('s'=>'Name:','mod'=>'smartblog'),$_smarty_tpl);?>
</b>
                                </td>
                                <td>
                                	<input type="text" tabindex="1" class="inputName form-control grey" value="" name="name">
                                </td>
                            </tr>
                            <tr>
                            	<td>
                                    <b><?php echo smartyTranslate(array('s'=>'E-mail:','mod'=>'smartblog'),$_smarty_tpl);?>
 </b>
                                    <span class="note"><?php echo smartyTranslate(array('s'=>'(Not Published)','mod'=>'smartblog'),$_smarty_tpl);?>
</span>
                                </td>
                                <td>
                                	<input type="text" tabindex="2" class="inputMail form-control grey" value="" name="mail">
                                </td>
                            </tr>
                            <tr>
                            	<td>
                                    <b> <?php echo smartyTranslate(array('s'=>'Comment:','mod'=>'smartblog'),$_smarty_tpl);?>
</b>
                                </td>
                                <td>
                                	<textarea tabindex="4" class="inputContent form-control grey" rows="8" cols="50" name="comment"></textarea>
                                </td>
                            </tr>
							<?php if (Configuration::get('smartcaptchaoption')=='1') {?>
								<tr>
									<td> </td>
                                    <td><img src="<?php echo $_smarty_tpl->tpl_vars['modules_dir']->value;?>
smartblog/classes/CaptchaSecurityImages.php?width=100&height=40&characters=5"></td>
								</tr>
                                <tr>
                                    <td>
                                        <b><?php echo smartyTranslate(array('s'=>'Type Code','mod'=>'smartblog'),$_smarty_tpl);?>
</b>
                                    </td>
                                    <td>
                                        <input type="text" tabindex="" value="" name="smartblogcaptcha" class="smartblogcaptcha form-control grey">
                                    </td>
								</tr>
							<?php }?>
						</tbody>
					</table>
					<input type='hidden' name='comment_post_ID' value='1478' id='comment_post_ID' />
					<input type='hidden' name='id_post' value='<?php echo $_smarty_tpl->tpl_vars['id_post']->value;?>
' id='id_post' />
					<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                    
					<div class="text-right">	
        				<div class="submit">
            				<input type="submit" name="addComment" id="submitComment" class="bbutton btn btn-default button-medium" value="<?php echo smartyTranslate(array('s'=>'Submit','mod'=>'smartblog'),$_smarty_tpl);?>
">
						</div>
                    </div>
				</form>
		</div>
	</div>

	<script type="text/javascript">
        $('#submitComment').bind('click',function(event) {
            event.preventDefault();
            var data = { 
                'action':'postcomment', 
                'id_post':$('input[name=\'id_post\']').val(),
                'comment_parent':$('input[name=\'comment_parent\']').val(),
                'name':$('input[name=\'name\']').val(),
                //'website':$('input[name=\'website\']').val(),
                'smartblogcaptcha':$('input[name=\'smartblogcaptcha\']').val(),
                'comment':$('textarea[name=\'comment\']').val(),
                'mail':$('input[name=\'mail\']').val()
            };
            
            $.ajax( {
                url: baseDir + 'modules/smartblog/ajax.php',
                data: data, 
                dataType: 'json',
                beforeSend: function() {
                    $('.alert-warning, .alert-success, .alert-danger').remove();
                    $('#submitComment').attr('disabled', true);
                    $('#commentInput').before('<div class="attention"><img src="http://321cart.com/sellya/catalog/view/theme/default/image/loading.gif" alt="" />Please wait!</div>');
                },
                complete: function() {
                    $('#submitComment').attr('disabled', false);
                    $('.attention').remove();
                },
                success: function(json) {
                    
                    if (json['error']) {
                        $('#commentInput').before('<div class="alert alert-warning">' + '<i class="fa fa-warning"></i> ' + json['error']['common'] + '</div>');
                        $('.text-warning').each(function() {
                            $(this).text('')
                        });
                        if (json['error']['name']) {
                            $('.inputName').after('<span class="text-warning">' + json['error']['name'] + '</span>');
                        }
                        if (json['error']['mail']) {
                            $('.inputMail').after('<span class="text-warning">' + json['error']['mail'] + '</span>');
                        }
                        if (json['error']['comment']) {
                            $('.inputContent').after('<span class="text-warning">' + json['error']['comment'] + '</span>');
                        }
                        if (json['error']['captcha']) {
                            $('.smartblogcaptcha').after('<span class="text-warning">' + json['error']['captcha'] + '</span>');
                        }
                    }
                        
                    if (json['success']) {
                        $('input[name=\'name\']').val('');
                        $('input[name=\'mail\']').val('');
                        //$('input[name=\'website\']').val('');
                        $('textarea[name=\'comment\']').val('');
                        $('input[name=\'smartblogcaptcha\']').val('');
                        $('#commentInput').before('<div class="alert alert-success">' + json['success'] + '</div>');
                        setTimeout(function(){
                            $('.alert-success').fadeOut(300).delay(450).remove();
                            },2500
                        );
						location.reload();
                    }
                }
            });
        });
            
        var addComment = {
            moveForm : function(commId, parentId, respondId, postId) {
                var t = this, div, comm = t.I(commId), respond = t.I(respondId), cancel = t.I('cancel-comment-reply-link'), parent = t.I('comment_parent'), post = t.I('comment_post_ID');
    
                if ( ! comm || ! respond || ! cancel || ! parent )
                    return;
     
                t.respondId = respondId;
                postId = postId || false;
    
                if ( ! t.I('wp-temp-form-div') ) {
                    div = document.createElement('div');
                    div.id = 'wp-temp-form-div';
                    div.style.display = 'none';
                    respond.parentNode.insertBefore(div, respond);
                }
    
                comm.parentNode.insertBefore(respond, comm.nextSibling);
                if ( post && postId )
                    post.value = postId;
                    parent.value = parentId;
                    cancel.style.display = '';
    
                cancel.onclick = function() {
                    var t = addComment, temp = t.I('wp-temp-form-div'), respond = t.I(t.respondId);
    
                    if ( ! temp || ! respond )
                        return;
    
                    t.I('comment_parent').value = '0';
                    temp.parentNode.insertBefore(respond, temp);
                    temp.parentNode.removeChild(temp);
                    this.style.display = 'none';
                    this.onclick = null;
                    return false;
                };
    
                try { t.I('comment').focus(); }
                catch(e) {}
    
                return false;
            },
    
            I : function(e) {
                return document.getElementById(e);
            }
        };      
    </script>
    <?php }?>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['smartcustomcss']->value)) {?>
    <style>
        <?php echo $_smarty_tpl->tpl_vars['smartcustomcss']->value;?>

    </style>
<?php }?>
<?php }} ?>
