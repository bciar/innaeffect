<?php /* Smarty version Smarty-3.1.19, created on 2017-03-05 11:06:48
         compiled from "/home1/innaeffe/public_html/themes/theme1255/modules/blockpermanentlinks/blockpermanentlinks-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27452727658bc3798db0990-27838528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '613f8dd539830f4c4ef4796ae1aacf92ebb5f233' => 
    array (
      0 => '/home1/innaeffe/public_html/themes/theme1255/modules/blockpermanentlinks/blockpermanentlinks-header.tpl',
      1 => 1450858586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27452727658bc3798db0990-27838528',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'page_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bc3798e4d491_56047080',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bc3798e4d491_56047080')) {function content_58bc3798e4d491_56047080($_smarty_tpl) {?><!-- Block permanent links module HEADER -->

<div class="permanent-links">
 <div class="btn-menu  fa fa-align-justify current"></div>
<ul id="header_links" class="toogle_content">
    <li id="header_link_home"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index.php');?>
" class="header_links_home"><?php echo smartyTranslate(array('s'=>'home','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>

	<li id="header_link_contact">
    	<a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='contact') {?>class="active"<?php }?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'contact','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'contact','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a>
    </li>
	<li id="header_link_sitemap">
    	<a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='sitemap') {?>class="active"<?php }?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('sitemap'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'sitemap','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'sitemap','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a>
    </li>
    
    <li id="header_link_blog">
  	<a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='blog') {?>class="active"<?php }?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('smartblog'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'blog','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'blog','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a>
    </li>
    
     <li id="header_link_wishlist">
  	<a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='blog') {?>class="active"<?php }?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'my wishlist','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'my wishlist','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a>
    </li>     
</ul>
</div>


<!-- /Block permanent links module HEADER -->
<?php }} ?>
