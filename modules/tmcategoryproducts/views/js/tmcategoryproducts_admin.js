$(document).ready(function() {
    if ($('select[name="mode"]').val() == 0)
		$('input[name="use_carousel"]').parents('.form-group').hide();
	$(document).on('change', 'select[name="mode"]', function(){
		if ($(this).val() == 0)
			$('input[name="use_carousel"]').parents('.form-group').hide();
		else
			$('input[name="use_carousel"]').parents('.form-group').show();
	});
});