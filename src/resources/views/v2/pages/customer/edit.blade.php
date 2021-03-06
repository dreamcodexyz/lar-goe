@extends('goe::layouts.default')
@section('title', 'Go English Admin - '. $page_title)

@push('end-head')

@endpush

@section('page-content-wrapper')
    <div class="content ">

        <div class="bg-white">
            <div class="container">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item active">{{ __("Học viên") }}</li>
                    <li class="breadcrumb-item active">{{ $page_title }}</li>
                </ol>
            </div>
        </div>
        <div class=" no-padding container-fixed-lg bg-white">

            @include ('goe::includes.notifications')

            <div class="container">
                <div class="pull-right m-b-10">
                    <div class="col-xs-12">
                        <a href="{{ url('customer') }}"  class="btn btn-cons"><i class="fa fa-arrow-circle-left"></i> {{ __("goe::common.back") }}</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        @include('goe::pages.customer.form', ['form_data' => $form_data])
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@push('end-foot')

@endpush
