@extends('layouts.default')
@section('title', 'Go English Admin - '. $page_title)

@section('end-head')

    <link media="screen" type="text/css" rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-datepicker/css/datepicker3.css') }}">
    <link media="screen" type="text/css" rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-timepicker/bootstrap-timepicker.css') }}">

@endsection

@section('page-content-wrapper')
<div class="content ">
    <div class="container-fluid container-fixed-lg bg-white text-black">





        <!-- START PANEL -->
        <div class="panel panel-transparent">
            <div class="panel-heading">
                <div class="panel-title"><p>{{ $page_title }}</p></div>
                <div class="pull-right">
                    <div class="col-xs-12">
                        <a href="{{ url('classes') }}"  class="btn btn-cons"><i class="fa fa-arrow-circle-left"></i> {{ __("common.back") }}</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">

                <div class="row">
                    <div class="col-sm-12">

                <h3>{!! $form_data->name !!}</h3>
                <p>{!! $form_data->note !!}</p>

                @if (count($errors) > 0)
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                            <button class="close" data-dismiss="alert"></button>
                            {{ $error }}
                        </div>
                    @endforeach
                @endif
                    </div>
                </div>

                <form id="form_id" method="POST" action="{{ url('classes/save') }}" class="form-horizontal" role="form" autocomplete="off" novalidate="novalidate">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{!! $form_data->id !!}">
                    <div class="panel">
                        <ul class="nav nav-tabs nav-tabs-simple">
                            <li class="active">
                                <a data-toggle="tab" href="#tab2hellowWorld">Thông tin chung</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#tab3hellowWorld">Danh sách học viên</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab2hellowWorld">
                                <div class="row column-seperation">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                @include('classes.tab.general')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab3hellowWorld">
                                <div class="row column-seperation">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                @include('classes.tab.student')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-sm-3">
                            <p>{{ __("common.text_comfirm_save_form") }}</p>
                        </div>
                        <div class="col-sm-9">
                            <button class="btn btn-success" type="submit">{{ __('common.save') }}</button>
                            <button class="btn btn-success" name="save_and_continue" value="1" type="submit">{{ __('common.save_and_continue') }}</button>
                            {{--<button class="btn btn-default"><i class="pg-close"></i> {{ __('common.clear') }}</button>--}}
                        </div>
                    </div>

                </form>

            </div>
        </div>
        <!-- END PANEL -->
    </div>
</div>


@endsection

@section('end-foot')

    <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap-timepicker/bootstrap-timepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-validation/js/jquery.validate.min.js') }}"></script>


    <script type="text/javascript">
        $(document).ready(function($) {

            $('.class_time').datepicker({
                format: 'dd-mm-yyyy'
            });
            $('#fopen_time').timepicker();
            $('#fclose_time').timepicker();

            $('#form_id').validate();

            var optionText = $('.reference_options_select option:selected').text();
            $('.reference_options_select').parent('.cs-select').find('.cs-placeholder').text(optionText);

            var optionTextStatus = $('.status_options_select option:selected').text();
            $('.status_options_select').parent('.cs-select').find('.cs-placeholder').text(optionTextStatus);

            var optionTextHope = $('.hope_options_select option:selected').text();
            $('.hope_options_select').parent('.cs-select').find('.cs-placeholder').text(optionTextHope);

            var optionTextActive = $('.active_options_select option:selected').text();
            $('.active_options_select').parent('.cs-select').find('.cs-placeholder').text(optionTextActive);

            var optionTextStore = $('.store_options_select option:selected').text();
            $('.store_options_select').parent('.cs-select').find('.cs-placeholder').text(optionTextStore);

        });
    </script>

@endsection










