<form id="add-store-form" action="{{ route('stores/save') }}" method="POST">
    {{ csrf_field() }}

    @if ($store->id)
    <input type="hidden" name="id" value="{!! $store->id !!}">
    @endif

    <div class="form-group form-group-default">
        <label>Tên</label>
        <input type="text" name="name" placeholder="Tên" class="form-control required" value="{!! $store->name !!}">
    </div>
    <div class="form-group form-group-default">
        <label>Mã</label>
        <input type="text" name="code" placeholder="Mã" class="form-control required" value="{!! $store->code !!}">
    </div>
    <div class="form-group">
        <label style="padding-left: 10px">Ghi chú</label>
        <textarea name="note" style="height:50px" class="form-control required" placeholder="Ghi chú" >{!! $store->note !!}</textarea>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label class="pull-left">Trạng thái</label>
        </div>
        <div class="col-md-6">
            <select class="custom-select pull-right" name="is_actived" >
                <option {{ $store->is_actived == 1 ? 'selected' : '' }} value="1">Mở</option>
                <option {{ $store->is_actived == 2 ? 'selected' : '' }} value="2">Đóng</option>
            </select>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6"> <button type="submit" class="btn btn-complete btn-sm">{{ __("Lưu") }}</button> </div>
        @if ($store->id)
        <div class="col-md-6"> <a href="{{ url('stores') }}" class="btn pull-right btn-danger btn-sm">{{ __('Hủy') }}</a> </div>
        @endif
    </div>

</form>