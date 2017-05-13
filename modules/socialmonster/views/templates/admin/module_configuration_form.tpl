{*
* 2016 Vasyl Pominchuk
*
* NOTICE OF LICENSE
*
* This source file is subject to the GNU GENERAL PUBLIC LICENSE (v2)
* It is available through the world-wide-web at this URL:
* http://www.gnu.org/licenses/gpl-2.0.html
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to vpominchuk@gmail.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade module to newer
* versions in the future.
*
*  @author Vasyl Pominchuk <vpominchuk@gmail.com>
*  @copyright  2016 Vasyl Pominchuk
*  @license    http://www.gnu.org/licenses/gpl-2.0.html  GNU GENERAL PUBLIC LICENSE (v2)
*}

<style>
	{if $showCSS}
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
	{/if}
	
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
	<form method="POST" action="{$form_action|escape:'htmlall':'UTF-8'}">
		<div class="panel">
			<h3><i class="icon-cogs"></i> {l s='General' mod='socialmonster'}</h3>
			<div class="row">
				<p>
					<div class="form-group">
						<label class="col-lg-3 control-label">{l s='Vertical gap for Desktop (px)' mod='socialmonster'}</label>
						<div class="col-lg-9">
							<input type="text" name="SM_TOP" value="{$sm_top|escape:'htmlall':'UTF-8'}" size="5">
						</div>
					</div>
				</p>
			</div>
			<div class="row">
				<p>
					<div class="form-group">
						<label class="col-lg-3 control-label">{l s='Vertical gap for Mobile (px)' mod='socialmonster'}</label>
						<div class="col-lg-9">
							<input type="text" name="SM_MOB_TOP" value="{$sm_mob_top|escape:'htmlall':'UTF-8'}" size="5">
						</div>
					</div>
				</p>
			</div>
		</div>
		
		<div class="panel">
			<h3><i class="icon-cogs"></i> {l s='Buttons settings' mod='socialmonster'}</h3>
			<div class="row">
				<table class="table" id="buttons">
					<thead>
						<tr>
							<th class="center"><span class="title_box">{l s='Name' mod='socialmonster'}</span></th>
							<th class="center"><span class="title_box">{l s='Visible' mod='socialmonster'}</span></th>
							<th class="center"><span class="title_box">{l s='Main Screen' mod='socialmonster'}</span></th>
						</tr>
					</thead>
					<tbody>
						{foreach from=$buttons key=key item=button name=buttons}
							<tr>
								<td class="text-left">{$button.name|escape:'htmlall':'UTF-8'}</td>
								<td class="center"><input type="checkbox" name="SM_BUTTONS_VISIBILITY[{$key|escape:'htmlall':'UTF-8'}]" {if $button.visible|escape:'htmlall':'UTF-8'}checked{/if}></td>
								<td class="center"><input type="checkbox" name="SM_BUTTONS_PRIM[{$key|escape:'htmlall':'UTF-8'}]" {if $button.prim|escape:'htmlall':'UTF-8'}checked{/if}></td>
								<input type="hidden" class="button-order" name="SM_BUTTONS_ORDER[{$key|escape:'htmlall':'UTF-8'}]" value="{$smarty.foreach.buttons.index|escape:'htmlall':'UTF-8'}">
							</tr>
						{/foreach}
					</tbody>
				</table>
				<div class="clearfix">&nbsp;</div>
			</div>
			<div class="panel-footer">
				<button name="{$submit_name|escape:'htmlall':'UTF-8'}">{l s='Save' mod='socialmonster'}</button>
				<input type="hidden" name="do_save" value="1">
			</div>
		</div>
		<div class="panel additional-modules">
			<h3><i class="icon-cogs"></i> {l s='You might also be interested in:' mod='socialmonster'}</h3>
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
</script>