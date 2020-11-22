datatables = {
    init: function(data) {

        var $datatables = $('#datatables');

        if($datatables.length) {
            var table = $datatables.DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": data.url,
                    "dataType": "json",
					"type": "POST",
                },
                "columns" :  data.columns
            });
        }
    }
};

function advanceFilter() {
    $('div.advance-filter-wrapper').html('<i class="fal fa-chevron-down" data-toggle="collapse" data-target=".advance-filter-form" aria-expanded="false" aria-controls="advance-filter-form"></i>');
    var advance_filter = $('.advance-filter').html();
    $('.advance-filter').remove();
    $('.advance-filter-form').html(advance_filter);

    $('.advance-filter-wrapper > i').click(function() {
        if ($('.advance-filter-form').is(':visible')){
            $(this).removeClass('fa-chevron-up');
            $(this).addClass('fa-chevron-down');
        } else {
            $(this).removeClass('fa-chevron-down');
            $(this).addClass('fa-chevron-up');
        }   
    });
}

function actionBar() {
    var action_bar = $('div.action-bar-wrapper').html();
    $('.action-bar-wrapper').remove();
    $('.action-bar').html(action_bar);

    $('[data-toggle="tooltip"]').tooltip();
}