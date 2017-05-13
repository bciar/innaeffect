<?php /* Smarty version Smarty-3.1.19, created on 2017-03-06 12:21:40
         compiled from "/home1/innaeffe/public_html/modules/smartblogsearch/views/templates/front/smartblogsearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81434974358bd9aa4e83a90-16446176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a9fef12bfcea7d3b06704fb09b6cecb7327aa8b' => 
    array (
      0 => '/home1/innaeffe/public_html/modules/smartblogsearch/views/templates/front/smartblogsearch.tpl',
      1 => 1450858586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81434974358bd9aa4e83a90-16446176',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bd9aa4ea5847_79368572',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bd9aa4ea5847_79368572')) {function content_58bd9aa4ea5847_79368572($_smarty_tpl) {?><div class="block" id="smartblogsearch">
    <h4 class='title_block'><a href='<?php echo smartblog::GetSmartBlogLink('smartblog_list');?>
'><?php echo smartyTranslate(array('s'=>'Blog Search','mod'=>'smartblogsearch'),$_smarty_tpl);?>
</a></h4>
    <div id="sdssearch_block_top" class="block_content clearfix">
        <form action="<?php echo smartblog::GetSmartBlogLink('smartblog_search');?>
" method="post" id="searchbox">
        <input type="hidden" value="0" name="smartblogaction">
        <input type="text" value="" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'smartblogsearch'),$_smarty_tpl);?>
" name="smartsearch" id="search_query_top" class="search_query form-control ac_input" autocomplete="off">
        <button class="btn btn-default button-search" name="smartblogsubmit" type="submit">
        	<span><?php echo smartyTranslate(array('s'=>'Search','mod'=>'smartblogsearch'),$_smarty_tpl);?>
</span>
        </button>
        </form>
    </div>
</div>




<?php }} ?>
