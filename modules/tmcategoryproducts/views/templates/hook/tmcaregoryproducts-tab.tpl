{if isset($headings) && $headings}
	{foreach from=$headings item='heading' name='heading'}
    	<li class="tab-category-{$heading.id|escape:'html':'UTF-8'}">
        	<a class="tab-category-{$heading.id|escape:'html':'UTF-8'}" href="#tab-category-{$heading.id|escape:'html':'utf-8'}" data-toggle="tab">{$heading.name|escape:'html':'utf-8'}</a>
        </li>
    {/foreach}
{/if}