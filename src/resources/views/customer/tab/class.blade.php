<div class="col-md-12">

    @if (!isset($class_data))
        <p>{{ __('common.no_data') }}</p>
    @else

    <div class="panel panel-transparent">
        <div class="panel-heading">
            <div class="panel-title">Tổng số: {{ count($class_data) }}</div>
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

                    @if (!count($class_data))
                        <p>{{ __('common.no_data') }}</p>
                    @else

                    <table class="table table-hover table-condensed dataTable no-footer" id="condensedTable" role="grid">
                        <thead>
                            <tr role="row">
                                <th style="width:70px" class="sorting_asc" tabindex="0" aria-controls="condensedTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Title: activate to sort column descending">Mã</th>
                                <th style="width:30%" class="sorting_asc" tabindex="0" aria-controls="condensedTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Title: activate to sort column descending">Tên</th>
                                <th style="width: 244px;" class="sorting text-center" tabindex="0" aria-controls="condensedTable" rowspan="1" colspan="1" aria-label="Condensed: activate to sort column ascending">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach ($class_data as $data)
                            <tr role="row" class="{{ $data->id % 2 == 0 ? 'odd' : 'event' }}">
                                <td class="v-align-middle">
                                    <p>{!! $data->id !!}</p>
                                </td>
                                <td class="v-align-middle">
                                    <p>{!! $data->name !!}</p>
                                </td>
                                <td class="v-align-middle">
                                    <p class="text-center"><a href="{{ url('classes/edit/'.$data->id) }}">{{ __('common.view_info') }}</a> </p>
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
    @endif
</div>