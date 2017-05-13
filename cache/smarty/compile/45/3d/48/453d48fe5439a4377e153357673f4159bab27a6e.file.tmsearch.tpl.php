<?php /* Smarty version Smarty-3.1.19, created on 2017-03-05 11:06:46
         compiled from "/home1/innaeffe/public_html/themes/theme1255/modules/tmsearch/views/templates/hook/tmsearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177146604458bc3796c7bc59-38281666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '453d48fe5439a4377e153357673f4159bab27a6e' => 
    array (
      0 => '/home1/innaeffe/public_html/themes/theme1255/modules/tmsearch/views/templates/hook/tmsearch.tpl',
      1 => 1450858586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177146604458bc3796c7bc59-38281666',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bc3796cdf9a9_08240032',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bc3796cdf9a9_08240032')) {function content_58bc3796cdf9a9_08240032($_smarty_tpl) {?>
<div id="tmsearch" class="">
	<form id="tmsearchbox" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',null,null,null,false,null,true), ENT_QUOTES, 'UTF-8', true);?>
" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="tm_search_query form-control" type="text" id="tm_search_query" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'tmsearch'),$_smarty_tpl);?>
" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
		<button type="submit" name="tm_submit_search" class="btn btn-default button-search">
			<span><?php echo smartyTranslate(array('s'=>'Search','mod'=>'tmsearch'),$_smarty_tpl);?>
</span>
		</button>
	</form>
</div><?php }} ?>
