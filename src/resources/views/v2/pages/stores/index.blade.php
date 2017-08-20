@extends('goe::layouts.default')
@section('title', 'Go English Admin - '. $page_title)


@push('end-head')

@endpush

@section('page-content-wrapper')
    <div class="content ">

        <div class="bg-white">
            <div class="container">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item active">{{ __("Chi nhánh") }}</li>
                    <li class="breadcrumb-item active">{{ $page_title }}</li>
                </ol>
            </div>
        </div>
        <div class=" no-padding container-fixed-lg bg-white">

            @include ('goe::includes.notifications')

            <div class="container">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card card-default">
                            <div class="card-header ">
                                <div class="card-title">{{ $store->code ? __("Thông tin chi tiết") : __("Thêm mới") }}</div>
                                <div class="tools">
                                    <a class="collapse" href="javascript:;"></a>
                                    <a class="config" data-toggle="modal" href="#grid-config"></a>
                                    <a class="reload" href="javascript:;"></a>
                                    <a class="remove" href="javascript:;"></a>
                                </div>
                            </div>
                            <div class="card-block">
                                @include('goe::pages.stores.form', ['stores' => $stores, 'store' => $store])
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card card-default">
                            <div class="card-header ">
                                <div class="card-title">Danh sách chi nhánh</div>
                            </div>
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        @include('goe::pages.stores.table', ['stores' => $stores])
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@push('end-foot')

@endpush