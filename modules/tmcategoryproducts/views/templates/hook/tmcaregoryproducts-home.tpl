{if isset($blocks) && $blocks}
	{foreach from=$blocks item='block' name='block'}
    	<section id="block-category-{$block.id}" class="block category-block">
        	<h4 class="title_block"><a href="{$link->getCategoryLink($block.id)|escape:'html':'UTF-8'}">{$block.name}</a></h4>
            {if isset($block.products) && $block.products}
            	{assign var='products' value=$block.products}
            	{include file="$tpl_dir./product-list.tpl"}
            {else}
            	<p class="alert alert-warning">{l s='No producs in this category.' mod='tmcategoryproducts'}</p>
            {/if}
        </section>
        {if $block.carousel}
            {literal}
                <script type="text/javascript">
                    $(document).ready(function(){
                        setNbCatItems();
                        tmCategoryCarousel{/literal}{$block.id}{literal} = $('#block-category-{/literal}{$block.id}{literal} > ul').bxSlider({
                            responsive:true,
                            useCSS: false,
                            minSlides: tm_cps_carousel_nb_new,
                            maxSlides: tm_cps_carousel_nb_new,
                            slideWidth: tm_cps_carousel_slide_width,
                            slideMargin: tm_cps_carousel_slide_margin,
                            infiniteLoop: tm_cps_carousel_loop,
                            hideControlOnEnd: tm_cps_carousel_hide_control,
                            randomStart: tm_cps_carousel_random,
                            moveSlides: tm_cps_carousel_item_scroll,
                            pager: tm_cps_carousel_pager,
                            autoHover: tm_cps_carousel_auto_hover,
                            auto: tm_cps_carousel_auto,
                            speed: tm_cps_carousel_speed,
                            pause: tm_cps_carousel_auto_pause,
                            controls: tm_cps_carousel_control,
                            autoControls: tm_cps_carousel_auto_control,
                            startText:'',
                            stopText:'',						
							 onSliderLoad: function() {
										$("#homepage-carousel li:not([class='bx-clone'])").eq(0).addClass('current');
									  },
									  onSlideBefore: function() {
										$("#homepage-carousel li").removeClass('current');
										current = slider.getCurrentSlide();
										$("#homepage-carousel li:not([class='bx-clone'])").eq(current).addClass('current');	
									  }    
  
  
              });
                    
                        var tm_cps_doit;
                        $(window).resize(function () {
                            clearTimeout(tm_cps_doit);
                            tm_cps_doit = setTimeout(function() {
                                resizedwtm_cps{/literal}{$block.id}{literal}();
                            }, 201);
                        });
                    });
                    function resizedwtm_cps{/literal}{$block.id}{literal}(){
                        setNbCatItems();
                        tmCategoryCarousel{/literal}{$block.id}{literal}.reloadSlider({
                            responsive:true,
                            useCSS: false,
                            minSlides: tm_cps_carousel_nb_new,
                            maxSlides: tm_cps_carousel_nb_new,
                            slideWidth: tm_cps_carousel_slide_width,
                            slideMargin: tm_cps_carousel_slide_margin,
                            infiniteLoop: tm_cps_carousel_loop,
                            hideControlOnEnd: tm_cps_carousel_hide_control,
                            randomStart: tm_cps_carousel_random,
                            moveSlides: tm_cps_carousel_item_scroll,
                            pager: tm_cps_carousel_pager,
                            autoHover: tm_cps_carousel_auto_hover,
                            auto: tm_cps_carousel_auto,
                            speed: tm_cps_carousel_speed,
                            pause: tm_cps_carousel_auto_pause,
                            controls: tm_cps_carousel_control,
                            autoControls: tm_cps_carousel_auto_control,
                            startText:'',
                            stopText:'',
							 onSliderLoad: function() {
										$("#homepage-carousel li:not([class='bx-clone'])").eq(0).addClass('current');
									  },
									  onSlideBefore: function() {
										$("#homepage-carousel li").removeClass('current');
										current = slider.getCurrentSlide();
										$("#homepage-carousel li:not([class='bx-clone'])").eq(current).addClass('current');	
									  }    
                        });
                }
                
                function setNbCatItems()
                {
                    if ($('.category-block').width() < 400)
                        tm_cps_carousel_nb_new = 1;
                    if ($('.category-block').width() >= 400)
                        tm_cps_carousel_nb_new = 2;
                    if ($('.category-block').width() >= 560)
                        tm_cps_carousel_nb_new = 3;
                    if($('.category-block').width() > 840)
                        tm_cps_carousel_nb_new = tm_cps_carousel_nb;
                    }
                </script>
            {/literal}
		{/if}
    {/foreach}
{/if}