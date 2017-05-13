/*
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
*/

$(document).ready(function(){

	if ($('#ruqop').length == 0)
		return;
	var $qp = $('#ruqop');
	$qp.slideDown('slow');

	$qp.find('[type="submit"]').attr('disabled', false);
	$(document).on('click', '#ruqop button', function(e)
	{
		e.preventDefault();
		var $form = $('#buy_block');
		$form.find('[type="submit"]').attr('disabled', true);
		$.ajax({
			type: 'POST',
			url: baseDir + 'modules/ruqop/ajax.php?token=' + static_token,
			async: true,
			cache: false,
			dataType: 'json',
			data: $form.serialize(),
			success: function(jsonData)
			{
				$form.find('[type="submit"]').attr('disabled', false);
				if (!!$.prototype.fancybox)
					$.fancybox.open([{type: 'inline', autoScale: true, minHeight: 0, maxWidth: '40%', content: jsonData.result}], {padding: 0});
				else
					alert(jsonData.result);
			},
			error: function(){
				$form.find('[type="submit"]').attr('disabled', false);
			}
		});
	});
});