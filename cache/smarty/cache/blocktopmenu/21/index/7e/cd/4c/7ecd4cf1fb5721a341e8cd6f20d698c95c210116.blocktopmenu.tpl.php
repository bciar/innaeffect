<?php /*%%SmartyHeaderCode:14878292005679df79285b76-51651001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ecd4cf1fb5721a341e8cd6f20d698c95c210116' => 
    array (
      0 => '/home1/innaeffe/public_html/themes/default-bootstrap/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1446157012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14878292005679df79285b76-51651001',
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5679df792c98f7_94884483',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5679df792c98f7_94884483')) {function content_5679df792c98f7_94884483($_smarty_tpl) {?>	<!-- Menu -->
	<div id="block_top_menu" class="sf-contener clearfix col-lg-12">
		<div class="cat-title">Menu</div>
		<ul class="sf-menu clearfix menu-content">
			<li><a href="http://www.innaeffect.com/3-women" title="Women">Women</a><ul><li><a href="http://www.innaeffect.com/4-tops" title="Tops">Tops</a><ul><li><a href="http://www.innaeffect.com/5-tshirts" title="T-shirts">T-shirts</a></li><li><a href="http://www.innaeffect.com/7-blouses" title="Blouses">Blouses</a></li></ul></li><li><a href="http://www.innaeffect.com/8-dresses" title="Dresses">Dresses</a><ul><li><a href="http://www.innaeffect.com/9-casual-dresses" title="Casual Dresses">Casual Dresses</a></li><li><a href="http://www.innaeffect.com/10-evening-dresses" title="Evening Dresses">Evening Dresses</a></li><li><a href="http://www.innaeffect.com/11-summer-dresses" title="Summer Dresses">Summer Dresses</a></li></ul></li><li class="category-thumbnail"><div><img src="http://www.innaeffect.com/img/c/3-0_thumb.jpg" alt="Women" title="Women" class="imgm" /></div><div><img src="http://www.innaeffect.com/img/c/3-1_thumb.jpg" alt="Women" title="Women" class="imgm" /></div></li></ul></li>
							<li class="sf-search noBack" style="float:right">
					<form id="searchbox" action="http://www.innaeffect.com/search" method="get">
						<p>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							<input type="text" name="search_query" value="" />
						</p>
					</form>
				</li>
					</ul>
	</div>
	<!--/ Menu -->
<?php }} ?>
