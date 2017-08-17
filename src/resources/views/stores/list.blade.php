@extends('goe::layouts.default')
@section('title', 'Go English Admin - '. $page_title)


@section('end-head')
<link type="text/css" rel="stylesheet" href="{{ asset('assets/plugins/jquery-datatable/media/css/jquery.dataTables.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css') }}">
<link media="screen" type="text/css" rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/datatables.responsive.css') }}">

<script>
    function checkAll()
    {

        function toggle(source) {
            checkboxes = $("input.cbox_customer_id");
            for(var checkbox in checkboxes)
                checkbox.checked = source.checked;
        }


        $("input.cbox_customer_id").each(function(){
            if($(this).attr('checked')!=true) {
                $(this).attr('checked',false);
            }else{
                $(this).attr('checked',false);
            }
        });

    }
</script>

@endsection

@section('page-content-wrapper')
<div class="content ">

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif


    <div class="container-fluid container-fixed-lg bg-white">
        <!-- START PANEL -->
        <div class="panel panel-transparent">
            <div class="panel-heading">
                <div class="panel-title"><p>{{ $page_title }}</p></div>
                <div class="pull-right m-b-10">
                    <div class="col-xs-12">
                        <a href="{{ url('stores/new') }}" class="btn btn-default "><i class="fa pg-plus"></i>  {{ __('goe::common.add_new') }}</a>
                        <button type="button" class="btn btn-default">{{ __('goe::common.delete') }}</button>
                    </div>
                </div>

                <div class="clearfix"></div>

            </div>
            <div class="panel-body">
                <div id="tableWithDynamicRows_wrapper" class="dataTables_wrapper form-inline no-footer">
                    <div>
                        @if ($list_data->isEmpty())
                            <p>{{ __('goe::common.no_data') }}</p>
                        @else
                        <table class="table table-hover demo-table-dynamic table-responsive-block dataTable no-footer" id="tableWithDynamicRows" role="grid" aria-describedby="tableWithDynamicRows_info">
                            <thead>
                                <tr role="row">
                                    <th style="width:10px; padding-left: 10px !important;" class="sorting_asc" tabindex="0" aria-controls="tableWithDynamicRows" rowspan="1" colspan="1" aria-label="App name: activate to sort column descending" aria-sort="ascending"><input class="" onClick="checkAll()" type="checkbox"></th>
                                    <th style="width:10px" class="sorting_asc" tabindex="0" aria-controls="tableWithDynamicRows" rowspan="1" colspan="1" aria-label="App name: activate to sort column descending" aria-sort="ascending">Mã</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="tableWithDynamicRows" rowspan="1" colspan="1" aria-label="App name: activate to sort column descending" aria-sort="ascending">Tên</th>
                                    <th class="sorting" tabindex="0" aria-controls="tableWithDynamicRows" rowspan="1" colspan="1" aria-label="Notes: activate to sort column ascending" style="width: 100px;">Điện thoại/th>
                                    <th class="sorting" tabindex="0" aria-controls="tableWithDynamicRows" rowspan="1" colspan="1" aria-label="Notes: activate to sort column ascending" style="width: 100px;">Địa chỉ/th>
                                    <th class="sorting" tabindex="0" aria-controls="tableWithDynamicRows" rowspan="1" colspan="1" aria-label="Notes: activate to sort column ascending" style="width: 100px;">Ghi chú</th>
                                    <th class="sorting" tabindex="0" aria-controls="tableWithDynamicRows" rowspan="1" colspan="1" aria-label="Notes: activate to sort column ascending" style="width: 100px;">Tình trạng</th>
                                    <th class="sorting" tabindex="0" aria-controls="tableWithDynamicRows" rowspan="1" colspan="1" aria-label="Notes: activate to sort column ascending" style="width: 100px;">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($list_data as $data)

                                    <tr role="row" class="{{ $data->id % 2 == 0 ? 'odd' : 'event' }}">
                                        <td class="v-align-middle sorting_1">
                                            <input type="checkbox" class="cbox_customer_id" name="customers[]" value="{!! $data->id !!}">
                                        </td>
                                        <td class="v-align-middle">
                                            <p>{!! $data->id !!}</p>
                                        </td>
                                        <td class="v-align-middle ">
                                            <p>{!! $data->name !!}</p>
                                        </td>
                                        <td class="v-align-middle ">
                                            <p>{!! $data->phone !!}</p>
                                        </td>
                                        <td class="v-align-middle ">
                                            <p>{!! $data->address !!}</p>
                                        </td>
                                        <td class="v-align-middle ">
                                            <p>{!! $data->note !!}</p>
                                        </td>
                                        <td class="v-align-middle">
                                            <p>
                                                @if (isset($status_options))
                                                    @foreach ($status_options as $status)
                                                        {{ $data->is_actived == $status['value'] ? $status['label'] : '' }}
                                                    @endforeach
                                                @endif
                                            </p>
                                        </td>
                                        <td class="v-align-middle">
                                            <p class="text-center"><a href="{{ url('stores/edit/'.$data->id) }}">{{ __('goe::common.edit') }}</a> | <a href="{{ url('stores/delete/'.$data->id) }}">{{ __('goe::common.delete') }}</a></p>
                                        </td>
                                    </tr>

                                @endforeach

                            </tbody>
                        </table>
                        @endif
                    </div>
                    {{--{!! $customers->render() !!}--}}
                    {{--<div class="row">--}}
                        {{--<div>--}}
                            {{--<div class="dataTables_paginate paging_simple_numbers" id="tableWithDynamicRows_paginate">--}}
                                {{--<ul class="">--}}
                                    {{--<li class="paginate_button previous disabled" id="tableWithDynamicRows_previous">--}}
                                        {{--<a href="#" aria-controls="tableWithDynamicRows" data-dt-idx="0" tabindex="0"><i class="pg-arrow_left"></i></a>--}}
                                    {{--</li>--}}
                                    {{--<li class="paginate_button active">--}}
                                        {{--<a href="#" aria-controls="tableWithDynamicRows" data-dt-idx="1" tabindex="0">1</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="paginate_button next disabled" id="tableWithDynamicRows_next">--}}
                                        {{--<a href="#" aria-controls="tableWithDynamicRows" data-dt-idx="2" tabindex="0"><i class="pg-arrow_right"></i></a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<div class="dataTables_info" id="tableWithDynamicRows_info" role="status" aria-live="polite">Showing <b>1 to 5</b> of 5 entries</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
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