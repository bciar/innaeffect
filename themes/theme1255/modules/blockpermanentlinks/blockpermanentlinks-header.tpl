<!-- Block permanent links module HEADER -->

<div class="permanent-links">
 <div class="btn-menu  fa fa-align-justify current"></div>
<ul id="header_links" class="toogle_content">
    <li id="header_link_home"><a href="{$link->getPageLink('index.php')}" class="header_links_home">{l s='home' mod='blockpermanentlinks'}</a></li>

	<li id="header_link_contact">
    	<a {if $page_name =='contact'}class="active"{/if} href="{$link->getPageLink('contact', true)|escape:'html'}" title="{l s='contact' mod='blockpermanentlinks'}">{l s='contact' mod='blockpermanentlinks'}</a>
    </li>
	<li id="header_link_sitemap">
    	<a {if $page_name =='sitemap'}class="active"{/if} href="{$link->getPageLink('sitemap')|escape:'html'}" title="{l s='sitemap' mod='blockpermanentlinks'}">{l s='sitemap' mod='blockpermanentlinks'}</a>
    </li>
    
    <li id="header_link_blog">
  	<a {if $page_name =='blog'}class="active"{/if} href="{$link->getPageLink('smartblog')|escape:'html'}" title="{l s='blog' mod='blockpermanentlinks'}">{l s='blog' mod='blockpermanentlinks'}</a>
    </li>
    
     <li id="header_link_wishlist">
  	<a {if $page_name =='blog'}class="active"{/if} href="{$link->getModuleLink('blockwishlist', 'mywishlist', array(), true)|escape:'html':'UTF-8'}" title="{l s='my wishlist' mod='blockpermanentlinks'}">{l s='my wishlist' mod='blockpermanentlinks'}</a>
    </li>     
</ul>
</div>


<!-- /Block permanent links module HEADER -->
