{*
* Quick order on product page (via phone)
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
*
* @copyright Copyright &copy; 2008-2016 PrestaDev.ru
* @license   http://www.opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
* @version 1.0.0
*}
{if isset($err) && $err}
	<div class="alert alert-danger ruqalert">
		<ul>
		{foreach from=$err item=error}
			<li>{$error|escape:'htmlall':'UTF-8'}</li>
		{/foreach}
		</ul>
	</div>
{else}
	{if $step == 1}
		<div class="ruqop unvisible box-cart-bottom" id="ruqop">
		<div class="clearfix">
			<div class="clearfix"></div>
			<div class="clearfix">
				<label for="phone_mobile">{l s='Order by phone' mod='ruqop'}</label>
				<div class="required form-group input-group-sm">
					<input class="is_required form-control" type="text" value="{if isset($address) && isset($address->phone_mobile)}{$address->phone_mobile|escape:'html':'UTF-8'}{/if}" name="phone_mobile" id="phone_mobile" />
					<button class="btn btn-sm btn-info submit" name="submit" type="submit">
						<span>{l s='Proceed to checkout' mod='ruqop'} <i class="icon-chevron-right right"></i></span>
					</button>
				</div>
			</div>
			<div class="submit clearfix">
			</div>
			<div class="clearfix"></div>
		</div>
		</div>
		<div class="clearfix"></div>
	{elseif $step == 2}
		<div class="box rubox">
			<h1 class="page-heading">{l s='Your order is complete.' mod='ruqop'}</h1>

			{l s='If you have questions, comments or concerns, please contact our' mod='ruqop'} 
			<a href="{$link->getPageLink('contact', true)|escape:'html':'UTF-8'}">{l s='expert customer support team.' mod='ruqop'}</a>
			<br />
		</div>
		<div class="clearfix"></div>
	{/if}
{/if}