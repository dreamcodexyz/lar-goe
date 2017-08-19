<table class="table">
    <thead>
    <tr>
        <th>#</th>
        <th>Tên</th>
        <th>Mã</th>
        <th>Ghi chú</th>
        <th>Chỉnh sửa</th>
    </tr>
    </thead>
    <tbody>
    @if(isset($stores))
        @foreach($stores as $data)
            <tr>
                <td scope="row">{{ $data->id }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->code }}</td>
                <td>{{ $data->note }}</td>
                <td><a href="{{ url('stores/edit/'.$data->id) }}">{{ __('goe::common.edit') }}</a> | <a href="{{ url('stores/delete/'.$data->id) }}">{{ __('goe::common.delete') }}</a></td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>