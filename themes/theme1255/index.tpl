{if isset($HOOK_HOME_TAB_CONTENT) && $HOOK_HOME_TAB_CONTENT|trim}
    {if isset($HOOK_HOME_TAB) && $HOOK_HOME_TAB|trim}
        <ul id="home-page-tabs" class="nav nav-tabs clearfix">
			{$HOOK_HOME_TAB}            
		</ul>
	{/if}
<div class="tab-content">
<div class="compareBox">{include file="./product-compare.tpl" paginationId='bottom'}</div>
{$HOOK_HOME_TAB_CONTENT}</div>
{addJsDef comparedProductsIds=$compared_products}
{/if}