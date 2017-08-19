@php ($stores = $session_data['stores'])
@php ($current_store_code = $session_data['current_store']['code'])

<div class="pull-right time">
    <form id="change-store-form" action="{{ route('settings/set_store') }}" method="POST">
        {{ csrf_field() }}
        <select class="custom-select" name="current_store" style="height: 30px">
            <option {{ $data->code === 'all' ? 'selected' : '' }} value="all">{{ __("Tất cả") }}</option>
            @foreach ($stores as $data)
                <option {{ $data->code === $current_store_code ? 'selected' : '' }} value="{!! $data->code !!}">{!! $data->name !!}</option>
            @endforeach
        </select>

        <button type="submit" class="btn btn-primary btn-xs ">OK</button>
    </form>

</div>