<?php /* Smarty version Smarty-3.1.19, created on 2017-03-05 13:50:53
         compiled from "/home1/innaeffe/public_html/modules/tmcategoryproducts//views/templates/hook/tmcaregoryproducts-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79366152858bc5e0dcb8971-91557216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30ace671151a259a75832c9507f03dec2c3d4859' => 
    array (
      0 => '/home1/innaeffe/public_html/modules/tmcategoryproducts//views/templates/hook/tmcaregoryproducts-home.tpl',
      1 => 1450858586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79366152858bc5e0dcb8971-91557216',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blocks' => 0,
    'block' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bc5e0dd40284_92490443',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bc5e0dd40284_92490443')) {function content_58bc5e0dd40284_92490443($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['blocks']->value)&&$_smarty_tpl->tpl_vars['blocks']->value) {?>
	<?php  $_smarty_tpl->tpl_vars['block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['block']->key => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->_loop = true;
?>
    	<section id="block-category-<?php echo $_smarty_tpl->tpl_vars['block']->value['id'];?>
" class="block category-block">
        	<h4 class="title_block"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['block']->value['id']), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['block']->value['name'];?>
</a></h4>
            <?php if (isset($_smarty_tpl->tpl_vars['block']->value['products'])&&$_smarty_tpl->tpl_vars['block']->value['products']) {?>
            	<?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable($_smarty_tpl->tpl_vars['block']->value['products'], null, 0);?>
            	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php } else { ?>
            	<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'No producs in this category.','mod'=>'tmcategoryproducts'),$_smarty_tpl);?>
</p>
            <?php }?>
        </section>
        <?php if ($_smarty_tpl->tpl_vars['block']->value['carousel']) {?>
            
                <script type="text/javascript">
                    $(document).ready(function(){
                        setNbCatItems();
                        tmCategoryCarousel<?php echo $_smarty_tpl->tpl_vars['block']->value['id'];?>
 = $('#block-category-<?php echo $_smarty_tpl->tpl_vars['block']->value['id'];?>
 > ul').bxSlider({
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
                                resizedwtm_cps<?php echo $_smarty_tpl->tpl_vars['block']->value['id'];?>
();
                            }, 201);
                        });
                    });
                    function resizedwtm_cps<?php echo $_smarty_tpl->tpl_vars['block']->value['id'];?>
(){
                        setNbCatItems();
                        tmCategoryCarousel<?php echo $_smarty_tpl->tpl_vars['block']->value['id'];?>
.reloadSlider({
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
            
		<?php }?>
    <?php } ?>
<?php }?><?php }} ?>
