@extends('layouts.home.layout')

@section('title', 'Dropee - Management Tools')

@section('styles')
@endsection

@section('body', 'landing-page')

@section('header')
    @include('layouts.home.header')
@endsection

@section('content')
<div class="container-fluid container-fluid-custom">
    <div class="section section-one">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 ml-auto mr-auto">
                    <span class="section-one-title text-center">Dropee Grid Management</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-9 ml-auto mr-auto">
                    <span class="section-one-desc text-center">Click on the occupied boxes below to change the text location, styling and colour.</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center p-0">
                    <a href="#" class="btn section-one-btn-left btn-round">Get Started<div class="ripple-container"></div></a>
                    <a href="#" class="btn section-one-btn-right btn-round" data-id="1">Background<div class="ripple-container"></div></a>
                </div>
            </div>
        </div>
    </div>
    <div class="section-two">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-12 col-sm-12 text-center grid">
                <div id="display-area"></div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function () {
    loadDisplay();

    $('.section-one-btn-right').click(function () {
        var id = $(this).data("id") + 1 > 3 ? 1 : $(this).data("id") + 1;
        $(this).data("id", id);
        $("body").removeClass().addClass("bg-" + id);
    });
});

function loadDisplay() {
    $.ajax({
        url: 'data/retrieve-display',
        type: 'get',
        dataType: 'html',
        data: {
            "_token": "<?php echo csrf_token() ?>",
        },
        success: function (data) {
            $("#display-area").html(data);
        }
    });
}
</script>
@endsection
