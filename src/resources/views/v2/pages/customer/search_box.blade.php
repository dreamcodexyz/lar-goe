<div id="search_card" class="card card-default" >
    <div class="card-header ">
        <div class="card-title">Tìm kiếm
        </div>
        <div class="card-controls">
            <ul>
                <li><a href="#" class="card-collapse" data-toggle="collapse"><i class="card-icon card-icon-collapse"></i></a>
                </li>
                <li><a href="#" class="card-refresh" data-toggle="refresh"><i class="card-icon card-icon-refresh"></i></a>
                </li>
                {{--<li><a href="#" class="card-close" data-toggle="close"><i class="card-icon card-icon-close"></i></a>--}}
                {{--</li>--}}
            </ul>
        </div>
    </div>
    <div class="card-block" style="display: none;">

            <form id="add-store-form" action="{{ route('customer/search') }}" method="POST">

                <div class="row">
                    {{ csrf_field() }}
                    <div class="col-md-3">
                        <div class="form-group form-group-default ">
                            <label>ID</label>
                            <input type="text" name="name" placeholder="ID" class="form-control required" value="{!! $search_condition['id'] !!}">
                        </div>
                    </div>
                    <div class="col-md-3">
                    <div class="form-group form-group-default">
                        <label>Tên</label>
                        <input type="text" name="name" placeholder="Tên" class="form-control required" value="{!! $search_condition['name'] !!}">
                    </div>
                    </div>
                    <div class="col-md-3">
                    <div class="form-group form-group-default">
                        <label>Mã</label>
                        <input type="text" name="code" placeholder="Mã" class="form-control required" value="{!! $search_condition['code'] !!}">
                    </div>
                    </div>
                    <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="pull-left">Trạng thái</label>
                        </div>
                        <div class="col-md-6">
                            <select class="custom-select pull-right" name="is_actived" >
                                <option value="0">Chọn</option>
                                <option {{ $search_condition['is_actived'] == 1 ? 'selected' : '' }} value="1">Mở</option>
                                <option {{ $search_condition['is_actived'] == 2 ? 'selected' : '' }} value="2">Đóng</option>
                            </select>
                        </div>
                    </div>
                    </div>
                    <br>
                    <div class="container">
                        <div class="pull-right">
                            <div class="row">
                                <div class="col-md-6  pull-right"> <button type="submit" class="btn btn-complete btn-sm">{{ __("Tìm kiếm") }}</button> </div>
                                @if ($search_condition['actived'])
                                    <div class="col-md-6"> <a href="{{ url('customer') }}" class="btn pull-right btn-danger btn-sm">{{ __('Hủy') }}</a> </div>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>

            </form>
    </div>
</div>

