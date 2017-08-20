@extends('goe::layouts.default')
@section('title', 'Go English Admin - '. $page_title)

@push('end-head')

@endpush

@section('page-content-wrapper')
<div class="content ">

    <div class="bg-white">
        <div class="container">
            <ol class="breadcrumb breadcrumb-alt">
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
                        <div class="card-header  separator">
                            <h5 class="card-title text-complete">Học viên</h5>
                            <div class="pull-right small hint-text">
                                {{ $count_customer  }} <i class="fa fa-user"></i>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="card-block">
                            <p>
                            <p>Hẹn test: <span>{{ $count_customer_wait_for_test  }}</span></p>
                            <p>Đang học: <span>{{ $count_customer_learning  }}</span></p>
                            <p>Cần tư vấn: <span>{{ $count_customer_consult  }}</span></p>
                            <p>Chờ đăng ký: <span>{{ $count_customer_available  }}</span></p>
                            <p>Đã tốt nghiệp: <span>{{ $count_customer_leave  }}</span></p>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card card-default">
                        <div class="card-header  separator">
                            <h5 class="card-title text-success">Lớp</h5>
                            <div class="pull-right small hint-text">
                                {{ $count_classes  }} <i class="fa fa-group"></i>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="card-block">
                            <p>
                            <p>Số bài học: <span>{{ $count_document  }}</span></p>
                            <p>Số tài liệu: <span>{{ $count_document  }}</span></p>
                            <p>Số bài test: <span>{{ $count_content_test  }} (Speaking: {{ $count_content_test_speaking }}, Writing: {{ $count_content_test_writing }})</span></p>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card card-default">
                        <div class="card-header  separator">
                            <h5 class="card-title text-danger">Trung tâm</h5>
                            <div class="pull-right small hint-text">
                                {{ $count_store  }} <i class="fa pg-home"></i>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="card-block">
                            <p>
                            <p>Chi nhánh: <span>{{ $count_store_data  }}</span></p>
                            <p>Số giáo viên: <span>{{ $count_teacher  }}</span></p>
                            <p>Số phụ huynh: <span>{{ $count_parents  }}</span></p>
                            <p>Số đồ dùng: <span>{{ $count_inventory  }}</span></p>
                            </p>
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