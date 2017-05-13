$(document).ready(function() {
    images_view();
});

function images_view()
{
	$(document).on('mouseenter', '.product-image-container', function(e) 
	{
		if ($(this).find('.product_img_link').children('img.hover-image').length)
		{
			$(this).find('.product_img_link').children('img:not(.hover-image)').stop().animate({opacity: 0});
			$(this).find('.product_img_link').children('img.hover-image').stop().animate({opacity: 1});
		}
	});
	$(document).on('mouseleave', '.product-image-container', function(e) 
	{
		if ($(this).find('.product_img_link').children('img.hover-image').length)
		{
			$(this).find('.product_img_link').children('img:not(.hover-image)').stop().animate({opacity: 1});
			$(this).find('.product_img_link').children('img.hover-image').stop().animate({opacity: 0});
		}
	});
}