{if isset($items) && $items}
	{foreach from=$items item='content' name='content'}
    	{if isset($content.products) && $content.products}
            {assign var='products' value=$content.products}
            {assign var='class' value="tab-pane tab-category-`$content.id`"}
            {assign var='tab_id' value="tab-category-`$content.id`"}
        	{include file="$tpl_dir./product-list.tpl" class=$class id=$tab_id}
        {else}
        	<ul id="tab-category-{$content.id}" class="tab-category-{$content.id} tab-pane">
          		<li class="alert alert-info">{l s='No producs in this category.' mod='tmcategoryproducts'}</li>
            </ul>
        {/if}
    {/foreach}
{/if}