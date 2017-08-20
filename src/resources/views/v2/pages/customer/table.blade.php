<div class="card card-default">
    <div class="card-header ">
        <div class="card-title">Danh sách học viên</div>
    </div>
    <div class="card-block">
        <div class="row">
            <div class="col-md-12">
                @if ($data_table->isEmpty())
                    <p>{{ __('goe::common.no_data') }}</p>
                @else
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên</th>
                            <th>Ngày sinh</th>
                            <th>Giới tính</th>
                            <th>Chi nhánh</th>
                            <th>Tình trạng</th>
                            <th>Chỉnh sửa</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($data_table))
                            @foreach($data_table as $data)
                                <tr>
                                    <td scope="row">{{ $data->id }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{!! date('d-m-Y', strtotime($data->birthday)) !!}</td>
                                    <td>{{ $data->gender == 2 ? __("goe::customer.form_attribute.gender_f") : __("goe::customer.form_attribute.gender_m") }}</td>
                                    <td>
                                        @if (isset($store_options))
                                            @foreach ($store_options as $val)
                                                {{ $data->store_id == $val['value'] ? $val['label'] : '' }}
                                            @endforeach
                                        @endif
                                    </td>
                                    <td>
                                        @if (isset($status_options))
                                            @foreach ($status_options as $status)
                                                {{ $data->status == $status['value'] ? $status['label'] : '' }}
                                            @endforeach
                                        @endif
                                    </td>
                                    <td><a href="{{ url('customer/edit/'.$data->id) }}">{{ __('goe::common.edit') }}</a> | <a href="{{ url('customer/delete/'.$data->id) }}">{{ __('goe::common.delete') }}</a></td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</div>

@push('end-foot')

<script type="text/javascript">
    jQuery(function(){
      $('#search_card').card({
            onRefresh: function() {
                // Timeout to simulate AJAX response delay
                setTimeout(function() {
                    $('#myCard').card({
                        refresh: false
                    });
                }, 2000);
            }
        });
    });
    </script>

@endpush