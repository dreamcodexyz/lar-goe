@extends('layouts.default')
@section('title', 'Go English Admin - '. $page_title)

@section('end-head')

    <link media="screen" type="text/css" rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-datepicker/css/datepicker3.css') }}">

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
                        <a href="{{ url('extra_help') }}"  class="btn btn-cons"><i class="fa fa-arrow-circle-left"></i> {{ __("common.back") }}</a>
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

                        <form id="form_id" method="POST" action="{{ url('extra_help/save') }}" class="form-horizontal" role="form" autocomplete="off" novalidate="novalidate">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{!! $form_data->id !!}">

                            <div class="form-group">
                                <label for="fname" class="col-sm-3 control-label">{{ __("extra_help.form_attribute.name") }}</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{!! $form_data->name !!}" id="fname" placeholder="{{ __("extra_help.form_attribute.name") }}" name="name" required aria-required="true">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="fclass" class="col-sm-3 control-label">{{ __("extra_help.form_attribute.class_id") }}</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{!! $form_data->class_id !!}" id="fclass" placeholder="{{ __("extra_help.form_attribute.class_id") }}" name="class_id" required aria-required="true">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="fteacher" class="col-sm-3 control-label">{{ __("extra_help.form_attribute.teacher") }}</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{!! $form_data->teacher_id !!}" id="fteacher" placeholder="{{ __("extra_help.form_attribute.teacher") }}" name="teacher_id" required aria-required="true">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="fcontent" class="col-sm-3 control-label">{{ __("extra_help.form_attribute.content") }}</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="content" id="fcontent" placeholder="" aria-invalid="false">{!! $form_data->content !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="birthday" class="col-sm-3 control-label">{{ __("customer.form_attribute.date") }}</label>
                                <div class="col-sm-2">
                                    <div id="customer_birthday" class="input-group date">
                                        <input type="text" value="{!! date('d-m-Y', strtotime($form_data->birthday))  !!}" name="birthday" class="form-control">
                                        <span id="birthday" class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">{{ __("extra_help.form_attribute.note") }}</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="note" id="note" placeholder="" aria-invalid="false">{!! $form_data->note !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="fresult" class="col-sm-3 control-label">{{ __("extra_help.form_attribute.result") }}</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="result" id="fresult" placeholder="" aria-invalid="false">{!! $form_data->result !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="fis_active" class="col-sm-3 control-label">{{ __("extra_help.form_attribute.is_active") }}</label>
                                <div class="col-sm-9">

                                    <select id="fis_active" name="is_active" class="status_options_select cs-select cs-skin-slide" data-init-plugin="cs-select">
                                        @if (isset($status_options))
                                            @foreach ($status_options as $status)
                                                <option value="{{ $status['value'] }}" {{ $form_data->status == $status['value'] ? 'selected' : '' }}>{{ $status['label'] }}</option>
                                            @endforeach
                                        @endif
                                    </select>

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
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PANEL -->
    </div>
</div>


@endsection

@section('end-foot')

    <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-validation/js/jquery.validate.min.js') }}"></script>

        <script>
        $(document).ready(function() {
            $('#customer_birthday').datepicker({
                format: 'dd-mm-yyyy'
            });
            var optionText = $('.status_options_select option:selected').text();
            $('.status_options_select').parent('.cs-select').find('.cs-placeholder').text(optionText);
            $('#form_id').validate();
        });
    </script>

@endsection










