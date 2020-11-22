@switch($type)
    @case('retrieve-display')
        <div class="grid-wrapper">
            <div class="overflow-x-auto">
            @foreach ($grids as $key => $rows)
                <div class="d-flex">
                    @foreach ($rows as $key2 => $grid)
                        <div class="grid-element d-flex justify-content-center align-items-center {{ $grid['title'] != '' ? 'is-filled' : 'not-filled' }} {{ $grid->colour->gradient }}" data-id="{{ $grid['id'] }}" data-title="{{ $grid['title'] }}">
                            <div class="{{ $grid->style->font }}">{{ $grid['title'] }}</div>
                        </div>
                    @endforeach
                </div>
            @endforeach
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".is-filled").click(function () {
                    var id = $(this).data("id");
                    var title = $(this).data("title");
                    $.ajax({
                        url: 'data/retrieve-form',
                        type: 'get',
                        dataType: 'html',
                        data: {
                            "_token": "<?php echo csrf_token() ?>",
                            "id": id,
                            "title": title,
                        },
                        success: function (data) {
                            bootbox.confirm({
                                title: "{{ __('Grid Management') }}",
                                message: data,
                                size: 'large',
                                buttons: {
                                    cancel: {
                                        label: "{{ __('Cancel') }}",
                                        className: "btn btn-cancel section-one-btn-right btn-round"
                                    },
                                    confirm: {
                                        label: "{{ __('Submit') }}",
                                        className: "btn btn-submit section-one-btn-left btn-round"

                                    }
                                },
                                callback: function (result) {
                                    if (result) {
                                        $.ajax({
                                            url: '/grids/' + id,
                                            type: 'post',
                                            dataType: 'json',
                                            data: new FormData($("#management-form")[0]),
                                            cache: false,
                                            contentType: false,
                                            processData: false,
                                            success: function (data) {
                                                if (!data.status) {
                                                    md.showNotification('top','right', data.icon, data.errors[Object.keys(data.errors)[0]]);
                                                } else {
                                                    loadDisplay();
                                                    md.showNotification('top','right', data.icon, data.message);
                                                }
                                            }
                                        });
                                    }
                                }
                            });
                        }
                    });
                });
            });
        </script>
        @break;
    @case('retrieve-form')
        <form id="management-form" class="form">
            @csrf
            @method('PUT')
            <ul class="nav nav-pills nav-pills-primary" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#link1" role="tablist" aria-expanded="true">
                        {{ __('Location') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#link2" role="tablist" aria-expanded="false">
                        {{ __('Styling') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#link3" role="tablist" aria-expanded="false">
                        {{ __('Colour') }}
                    </a>
                </li>
            </ul>
            <div class="tab-content tab-space">
                <div class="tab-pane active" id="link1" aria-expanded="true">
                    <div class="row">
                        <input type="hidden" name="grid_id" value="{{ $gridId }}">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="coordinate">1) {{ __('New location for') }} <span class="form-group-label">"{{ $title }}"</span></label>
                                <small id="emailHelp" class="form-text text-muted">{{ __('click on one of the empty boxes to select a new location') }}</small>
                            </div>
                            <div class="grid-wrapper text-center">
                                <div class="overflow-x-auto">
                                @foreach ($grids as $key => $rows)
                                    <div class="d-flex">
                                        @foreach ($rows as $key2 => $grid)
                                            <div class="grid-element grid-location d-flex justify-content-center align-items-center {{ $grid['title'] != '' ? 'selection-disabled' : 'selection-enabled' }}" data-id="{{ $grid['id'] }}" data-title="{{ $grid['title'] }}" data-type="location">
                                                <div class="">{{ $grid['title'] }}</div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="link2" aria-expanded="false">
                    <div class="row">
                        <input type="hidden" name="grid_style_id" value="{{ $gridStyleId }}">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="coordinate">2) {{ __('New style for') }} <span class="form-group-label">"{{ $title }}"</span></label>
                                <small id="emailHelp" class="form-text text-muted">{{ __('click on one of the options to select a new styling') }}</small>
                            </div>
                            <div class="grid-wrapper text-center">
                                <div class="d-flex">
                                    @foreach ($styles as $key => $style)
                                        <div class="grid-element grid-style d-flex justify-content-center align-items-center {{ $style['id'] == $gridStyleId ? 'selection-disabled' : 'selection-enabled' }}" data-style-id="{{ $style['id'] }}" data-type="style">
                                            <div class="{{ $style['font'] }}">{{ $title }}</div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="link3" aria-expanded="false">
                    <div class="row">
                        <input type="hidden" name="grid_colour_id" value="{{ $gridColourId }}">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="coordinate">3) {{ __('New colour for') }} <span class="form-group-label">"{{ $title }}"</span></label>
                                <small id="emailHelp" class="form-text text-muted">{{ __('click on one of the options to select a new colour') }}</small>
                            </div>
                            <div class="grid-wrapper text-center">
                                <div class="d-flex">
                                    @foreach ($colours as $key => $colour)
                                        <div class="grid-element grid-colour d-flex justify-content-center align-items-center {{ $colour['id'] == $gridColourId ? 'selection-disabled' : 'selection-enabled' }} {{ $colour['gradient'] }}" data-colour-id="{{ $colour['id'] }}" data-type="colour">
                                            <div class="">{{ $title }}</div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <script type="text/javascript">
            $(document).ready(function () {
                $(".selection-enabled").click(function () {
                    switch ($(this).data('type')) {
                        case 'location':
                            $('.grid-element.grid-location').removeClass("grid-selected");
                            $('.grid-element.grid-location.selection-enabled').children().empty();
                            $(this).addClass("grid-selected");
                            $(this).children().append('<i class="fal fa-check"></i>');
                            var id = $(this).data("id");
                            $("input[name=grid_id]").val(id);
                            break;
                        case 'style':
                            $('.grid-element.grid-style').removeClass("grid-selected");
                            $(this).addClass("grid-selected");
                            var style_id = $(this).data("style-id");
                            $("input[name=grid_style_id]").val(style_id);
                            break;
                        case 'colour':
                            $('.grid-element.grid-colour').removeClass("grid-selected");
                            $(this).addClass("grid-selected");
                            var colour_id = $(this).data("colour-id");
                            $("input[name=grid_colour_id]").val(colour_id);
                            break;
                        default:
                            break;
                    }
                });
            });
        </script>
        @break
    @default
    404
@endswitch
