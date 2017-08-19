@extends('goe::layouts.default')
@section('title', 'Go English Admin - '. $page_title)


@section('end-head')
<link type="text/css" rel="stylesheet" href="{{ asset('assets/plugins/jquery-datatable/media/css/jquery.dataTables.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css') }}">
<link media="screen" type="text/css" rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/datatables.responsive.css') }}">

<script>

</script>

@endsection

@section('page-content-wrapper')
<div class="content ">

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    @include ('goe::includes.notifications')

    <div class="container-fluid container-fixed-lg bg-white">
        <!-- START PANEL -->
        <div class="panel panel-transparent">
            <div class="panel-heading">
                <div class="panel-title"><p>{{ $page_title }}</p></div>
                <div class="pull-right m-b-10">

                </div>

                <div class="clearfix"></div>

            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <div data-pages="portlet" class="panel panel-default bg-master-lighter" id="portlet-basic">
                            <div class="panel-heading ">
                                <div class="panel-title">Học viên</div>
                                <div class="panel-controls">
                                    <ul>
                                        <li><a data-toggle="collapse" class="portlet-collapse" href="#"><i class="portlet-icon portlet-icon-collapse"></i></a>
                                        </li>
                                        <li><a data-toggle="refresh" class="portlet-refresh" href="#"><i class="portlet-icon portlet-icon-refresh"></i></a>
                                        </li>
                                        <li><a data-toggle="close" class="portlet-close" href="#"><i class="portlet-icon portlet-icon-close"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body">
                                <h3>
                                    <span class="semi-bold">Tổng số</span> {{ $count_customer  }}</h3>
                                <p>
                                    <p>Tỉ lệ nam/nữ: <span>{{ $count_customer_boy  }} / {{ $count_customer_girl  }}</span></p>
                                    <p>Hẹn test: <span>{{ $count_customer_wait_for_test  }}</span></p>
                                    <p>Đang học: <span>{{ $count_customer_learning  }}</span></p>
                                    <p>Cần tư vấn: <span>{{ $count_customer_consult  }}</span></p>
                                    <p>Chờ đăng ký: <span>{{ $count_customer_available  }}</span></p>
                                    <p>Đã tốt nghiệp: <span>{{ $count_customer_leave  }}</span></p>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default bg-primary-lighter">
                            <div class="panel-heading">
                                <div class="panel-title">Lớp</div>
                                <div class="panel-controls">
                                    <ul>
                                        <li><a data-toggle="close" class="portlet-close" href="#"><i class="portlet-icon portlet-icon-close"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body">
                                <h3>
                                    <span class="semi-bold">Tổng số</span> {{ $count_classes  }}</h3>
                                <p>
                                <p>Số bài học: <span>{{ $count_document  }}</span></p>
                                <p>Số tài liệu: <span>{{ $count_document  }}</span></p>
                                <p>Số bài test: <span>{{ $count_content_test  }} (Speaking: {{ $count_content_test_speaking }}, Writing: {{ $count_content_test_writing }})</span></p>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default bg-success-lighter">
                            <div class="panel-heading">
                                <div class="panel-title">Học viện</div>
                                <div class="panel-controls">
                                    <ul>
                                        <li><a data-toggle="close" class="portlet-close" href="#"><i class="portlet-icon portlet-icon-close"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body">
                                <h3>
                                    <span class="semi-bold">Địa điểm</span> {{ $count_store  }}</h3>
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
        <!-- END PANEL -->
    </div>
</div>

@endsection

@section('end-foot')

<script type="text/javascript" src="{{ asset('assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/datatables.responsive.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/lodash.min.js') }}" type="text/javascript"></script>


<script>
    $(document).ready(function() {
        $('#tableWithDynamicRows').DataTable();
    });
</script>

@endsection