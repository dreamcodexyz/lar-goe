<div class="col-md-12">

    <div class="panel panel-transparent">
        <div class="panel-heading">
            <div class="panel-title">Bảng tổng hợp kết quả học tập</div>
            <div class="tools">
                <a class="collapse" href="javascript:;"></a>
                <a class="config" data-toggle="modal" href="#grid-config"></a>
                <a class="reload" href="javascript:;"></a>
                <a class="remove" href="javascript:;"></a>
            </div>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <div id="condensedTable_wrapper" class="dataTables_wrapper form-inline no-footer">



                    @if (!$form_data->customer_results->count())
                        <p>{{ __('goe::common.no_data') }}</p>
                    @else


                    <table class="table table-hover table-condensed dataTable no-footer" id="condensedTable" role="grid">
                        <thead>
                            <tr role="row">
                                <th style="width:70px" class="sorting_asc" tabindex="0" aria-controls="condensedTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Title: activate to sort column descending">Mã</th>
                                <th style="width:30%" class="sorting_asc" tabindex="0" aria-controls="condensedTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Title: activate to sort column descending">Kết quả</th>
                                <th style="width: 244px;" class="sorting" tabindex="0" aria-controls="condensedTable" rowspan="1" colspan="1" aria-label="Condensed: activate to sort column ascending">Ngày ghi nhận</th>
                                <th style="width: 173px;" class="sorting" tabindex="0" aria-controls="condensedTable" rowspan="1" colspan="1" aria-label="Key: activate to sort column ascending">Phân loại</th>
                                <th style="width: 244px;" class="sorting text-center" tabindex="0" aria-controls="condensedTable" rowspan="1" colspan="1" aria-label="Condensed: activate to sort column ascending">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>

                        @php($customer_result = $form_data->customer_results)
                        @foreach ($customer_result as $data)

                            <tr role="row" class="{{ $data->id % 2 == 0 ? 'odd' : 'event' }}">

                                <td class="v-align-middle">
                                    <p>{!! $data->id !!}</p>
                                </td>
                                <td class="v-align-middle ">
                                    <p>{!! $data->result !!}</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>{!! date('d-m-Y', strtotime($data->result_date)) !!}</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>
                                        @if (isset($result_types))
                                            @foreach ($result_types as $status)
                                                {{ $data->type == $status['value'] ? $status['label'] : '' }}
                                            @endforeach
                                        @endif
                                    </p>
                                </td>

                                <td class="v-align-middle">
                                    <p class="text-center"><a href="{{ url('customer/result/edit/'.$data->id) }}">{{ __('goe::common.view_info') }}</a> </p>
                                </td>
                            </tr>

                        @endforeach

                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>

</div>