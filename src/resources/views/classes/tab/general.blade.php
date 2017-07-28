<input type="hidden" name="customer_id" value="{!! $form_data->name !!}">
<div class="form-group">
    <label for="fname" class="col-sm-3 control-label">{{ __("classes.form_attribute.name") }}</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" value="{!! $form_data->name !!}" id="fname" placeholder="{{ __("classes.form_attribute.name") }}" name="name"  required aria-required="true">
    </div>
</div>

<div class="form-group">
    <label for="fsize" class="col-sm-3 control-label">{{ __("classes.form_attribute.size") }}</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" value="{!! $form_data->size !!}" id="fsize" placeholder="{{ __("classes.form_attribute.size") }}" name="name"  required aria-required="true">
    </div>
</div>


<div class="form-group">
    <label for="fstart_date" class="col-sm-3 control-label">{{ __("classes.form_attribute.start_date") }}</label>
    <div class="col-sm-2">
        <div class="class_time input-group date">
            <input type="text" value="{!! date('d-m-Y', strtotime($form_data->start_date))  !!}" name="start_date" class="form-control">
            <span id="fstart_date" class="input-group-addon"><i class="fa fa-calendar"></i></span>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="fend_date" class="col-sm-3 control-label">{{ __("classes.form_attribute.end_date") }}</label>
    <div class="col-sm-2">
        <div class="class_time input-group date">
            <input type="text" value="{!! date('d-m-Y', strtotime($form_data->end_date))  !!}" name="end_date" class="form-control">
            <span id="fend_date" class="input-group-addon"><i class="fa fa-calendar"></i></span>
        </div>
    </div>
</div>


<div class="form-group">
    <label for="fopen_time" class="col-sm-3 control-label">{{ __("classes.form_attribute.open_time") }}</label>
    <div class="col-sm-2">
        <div class="input-group bootstrap-timepicker">
            <input id="fopen_time" type="text" value="{!! $form_data->open_time !!}" name="open_time" class="form-control">
            <span class="input-group-addon"><i class="pg-clock"></i></span>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="fclose_time" class="col-sm-3 control-label">{{ __("classes.form_attribute.close_time") }}</label>
    <div class="col-sm-2">
        <div class="input-group bootstrap-timepicker">
            <input id="fclose_time" type="text" value="{!! $form_data->close_time !!}" name="close_time" class="form-control">
            <span class="input-group-addon"><i class="pg-clock"></i></span>
        </div>
    </div>
</div>



<div class="form-group">
    <label for="fnote" class="col-sm-3 control-label">{{ __("classes.form_attribute.note") }}</label>
    <div class="col-sm-9">
        <textarea class="form-control" name="note" id="fnote" placeholder="" aria-invalid="false">{!! $form_data->note !!}</textarea>
    </div>
</div>

<div class="form-group">
    <label for="ftype" class="col-sm-3 control-label">{{ __("customer_result.form_attribute.type") }}</label>
    <div class="col-sm-9">

        <select id="factive" name="type" class="active_options_select cs-select cs-skin-slide" data-init-plugin="cs-select">
            @if (isset($result_types))
                @foreach ($result_types as $val)
                    <option value="{{ $val['value'] }}" {{ $form_data->type == $val['value'] ? 'selected' : '' }}>{{ $val['label'] }}</option>
                @endforeach
            @endif
        </select>

    </div>
</div>




