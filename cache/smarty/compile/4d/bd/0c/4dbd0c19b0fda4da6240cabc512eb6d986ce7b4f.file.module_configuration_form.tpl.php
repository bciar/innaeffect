<?php /* Smarty version Smarty-3.1.19, created on 2017-03-09 22:08:32
         compiled from "/home1/innaeffe/public_html/modules/socialmonster/views/templates/admin/module_configuration_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77172282258c218b0e69e90-92171615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dbd0c19b0fda4da6240cabc512eb6d986ce7b4f' => 
    array (
      0 => '/home1/innaeffe/public_html/modules/socialmonster/views/templates/admin/module_configuration_form.tpl',
      1 => 1489115279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77172282258c218b0e69e90-92171615',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'showCSS' => 0,
    'form_action' => 0,
    'sm_top' => 0,
    'sm_mob_top' => 0,
    'buttons' => 0,
    'button' => 0,
    'key' => 0,
    'submit_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c218b0f1d775_86621675',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c218b0f1d775_86621675')) {function content_58c218b0f1d775_86621675($_smarty_tpl) {?>

<style>
	<?php if ($_smarty_tpl->tpl_vars['showCSS']->value) {?>
	@import "//fonts.googleapis.com/css?family=Open+Sans:300,400,700";
	@import "//fonts.googleapis.com/css?family=Ubuntu+Condensed";
	
	#socialmonster, #socialmonster * {
		font-family: "Ubuntu Condensed",Helvetica,Arial,sans-serif;
		color: #555;
		font-size: 14.4px;
	}
	
	#socialmonster .table {
		width: 100%;
		border-collapse: separate;
		border-spacing: 0;
		border:0;
	}
	
	#socialmonster .table th.center,
	#socialmonster .table td.center {
	    text-align: center;
	}
	
	#socialmonster label {
		font-weight: normal;
	}
	
	.text-left {
	    text-align: left;
	}
	
	.table > tbody > tr > td:first-child {
		cursor: move;
	}
	
	.table > thead > tr > th, 
	.table > thead > tr > td, 
	.table > tbody > tr > th, 
	.table > tbody > tr > td,
	.table > tfoot > tr > th, 
	.table > tfoot > tr > td {
	    border-bottom: 1px solid #ddd;
	    line-height: 1.42857;
	    padding: 8px;
	    vertical-align: top;
	    background: none;
	}
	
	.table tbody > tr > td {
	    background-color: #fff;
	    border-bottom: 1px solid #eaedef;
	    border-top: medium none;
	    color: #666;
	    font-size: 12px;
	    padding: 3px 7px;
	    vertical-align: middle;
	}
	
	.table thead > tr > th {
	    font-weight: normal;
	}
	
	.table > tfoot > tr > td {
	    line-height: 1.42857;
	}
	
	#socialmonster .fixed-width-xs {
	    width: 48px !important;
	}
	
	.table thead > tr > th span.title_box {
	    color: #656565;
	    display: block;
	    white-space: nowrap;
	}
	
	.panel {
	    background-color: #fff;
	    border: 1px solid #d3d8db;
	    border-radius: 5px;
	    margin-bottom: 20px;
	    padding: 20px;
	    position: relative;
	}
	
	.panel h3 {
	    -moz-border-bottom-colors: none;
	    -moz-border-left-colors: none;
	    -moz-border-right-colors: none;
	    -moz-border-top-colors: none;
	    border-color: -moz-use-text-color -moz-use-text-color #eee;
	    border-image: none;
	    border-style: none none solid;
	    border-width: medium medium 1px;
	    font-size: 1.2em;
	    height: 2.2em;
	    line-height: 2.2em;
	    margin: -20px -16px 15px;
	    padding: 0 0 0 5px;
	    text-transform: uppercase;
	    font-weight: 400;
	}
	
	#socialmonster .form-group {
	    margin-left: -5px;
	    margin-right: -5px;
	}
	<?php }?>
	
	.additional-modules .form-group {
		border-bottom: 1px solid #d3d8db;
	}
	
	.additional-modules .label a {
		text-decoration: underline;
	}
	
	.additional-modules .image,
	.additional-modules .label,
	.additional-modules .desc {
		float: left;
		text-align: left;
	}
	
	.additional-modules .label,
	.additional-modules .desc {
		width: calc(100% - 80px);
		margin-bottom: 10px;
	}
</style>

<div id="socialmonster">
	<form method="POST" action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['form_action']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
		<div class="panel">
			<h3><i class="icon-cogs"></i> <?php echo smartyTranslate(array('s'=>'General','mod'=>'socialmonster'),$_smarty_tpl);?>
</h3>
			<div class="row">
				<p>
					<div class="form-group">
						<label class="col-lg-3 control-label"><?php echo smartyTranslate(array('s'=>'Vertical gap for Desktop (px)','mod'=>'socialmonster'),$_smarty_tpl);?>
</label>
						<div class="col-lg-9">
							<input type="text" name="SM_TOP" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sm_top']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" size="5">
						</div>
					</div>
				</p>
			</div>
			<div class="row">
				<p>
					<div class="form-group">
						<label class="col-lg-3 control-label"><?php echo smartyTranslate(array('s'=>'Vertical gap for Mobile (px)','mod'=>'socialmonster'),$_smarty_tpl);?>
</label>
						<div class="col-lg-9">
							<input type="text" name="SM_MOB_TOP" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sm_mob_top']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" size="5">
						</div>
					</div>
				</p>
			</div>
		</div>
		
		<div class="panel">
			<h3><i class="icon-cogs"></i> <?php echo smartyTranslate(array('s'=>'Buttons settings','mod'=>'socialmonster'),$_smarty_tpl);?>
</h3>
			<div class="row">
				<table class="table" id="buttons">
					<thead>
						<tr>
							<th class="center"><span class="title_box"><?php echo smartyTranslate(array('s'=>'Name','mod'=>'socialmonster'),$_smarty_tpl);?>
</span></th>
							<th class="center"><span class="title_box"><?php echo smartyTranslate(array('s'=>'Visible','mod'=>'socialmonster'),$_smarty_tpl);?>
</span></th>
							<th class="center"><span class="title_box"><?php echo smartyTranslate(array('s'=>'Main Screen','mod'=>'socialmonster'),$_smarty_tpl);?>
</span></th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars['button'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['button']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['buttons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['buttons']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['button']->key => $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['button']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['buttons']['index']++;
?>
							<tr>
								<td class="text-left"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['button']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
								<td class="center"><input type="checkbox" name="SM_BUTTONS_VISIBILITY[<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
]" <?php if (mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['button']->value['visible'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')) {?>checked<?php }?>></td>
								<td class="center"><input type="checkbox" name="SM_BUTTONS_PRIM[<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
]" <?php if (mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['button']->value['prim'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')) {?>checked<?php }?>></td>
								<input type="hidden" class="button-order" name="SM_BUTTONS_ORDER[<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
]" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['buttons']['index'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
							</tr>
						<?php } ?>
					</tbody>
				</table>
				<div class="clearfix">&nbsp;</div>
			</div>
			<div class="panel-footer">
				<button name="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['submit_name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Save','mod'=>'socialmonster'),$_smarty_tpl);?>
</button>
				<input type="hidden" name="do_save" value="1">
			</div>
		</div>
		<div class="panel additional-modules">
			<h3><i class="icon-cogs"></i> <?php echo smartyTranslate(array('s'=>'You might also be interested in:','mod'=>'socialmonster'),$_smarty_tpl);?>
</h3>
			<div class="row">
				<p>
					<div class="form-group">
						<div class="image">
							<img src="http://medias2.prestastore.com/img/p/../pico/21823.jpg">
						</div>
						<div class="label"><a href="http://addons.prestashop.com/en/21823-advanced-sales-statistics-tax-margin-profit-reports.html" target="_blank">Advanced Sales Statistics (tax, margin, profit reports)</a></div>
						<div class="desc">
							This is a must have module for any serious online store based on Prestashop. The module allows you to display stats of your orders, sales, best products, best manufacturers and stock information with well-designed and informative charts and tables.
						</div>
						<div class="clearfix">&nbsp;</div>
					</div>
				</p>
			</div>
			
			<div class="row">
				<p>
					<div class="form-group">
						<div class="image">
							<img src="http://medias2.prestastore.com/img/p/../pico/24126.jpg">
						</div>
						<div class="label"><a href="http://addons.prestashop.com/en/24126-products-in-cms-pages.html" target="_blank">Products in CMS pages</a></div>
						<div class="desc">
							The module provide you a quick and easy way to add single or multiple product blocks on CMS pages. It will improve your conversions, sales and increase your SEO effect.
						</div>
						<div class="clearfix">&nbsp;</div>
					</div>
				</p>
			</div>
		</div>
	</form>
</div>

<script>
	var rowMover = function(e, tr) {
	    var $originals = tr.children();
	    var $helper = tr.clone();
	    $helper.children().each(function(index)
	    {
	      $(this).width($originals.eq(index).width())
	    });
	    
	    return $helper;
	};
	
	var onDrop = function(event, ui) {
		ui.item.parent().find('tr input.button-order').each(function(indx, elem) {
			$(elem).val(indx);
		});
	}
	
	$("#buttons tbody").sortable({
	    helper: rowMover,
	    stop: onDrop
	    
	}).disableSelection();
</script><?php }} ?>
