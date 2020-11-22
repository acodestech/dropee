$('.datepicker').on('dp.change', function(e) { 
	$(this).parent().addClass('is-filled');
});

$('.master-checkbox').click(function () {
	if ($(this).is(':checked')) {
		$('.child-checkbox').prop('checked', true);

		var id = [];
		$('.child-checkbox:checked').each(function () {
			id.push($(this).val());
		});

		 $('input[name=checkbox_id]:hidden').val(id.toString());
	} else {
		$('.child-checkbox').prop('checked', false);
		$('input[name=checkbox_id]:hidden').val('');
	}
});