@if (!isset($form_data->customer))
    <p>{{ __('common.no_data') }}</p>
@else
<input type="hidden" name="customer_id" value="{!! $form_data->customer->value('id') !!}">
<div class="form-group">
    <label for="fcustomer_name" class="col-sm-3 control-label">{{ __("customer_result.form_attribute.customer_name") }}</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" value="{!! $form_data->customer->value('name') !!}" id="fcustomer_name" placeholder="{{ __("customer_result.form_attribute.customer_name") }}" name="customer_name"  required aria-required="true">
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


<div class="form-group">
    <label for="fresult_date" class="col-sm-3 control-label">{{ __("customer_result.form_attribute.result_date") }}</label>
    <div class="col-sm-2">
        <div id="customer_birthday" class="input-group date">
            <input type="text" value="{!! date('d-m-Y', strtotime($form_data->result_date))  !!}" name="result_date" class="form-control">
            <span id="fresult_date" class="input-group-addon"><i class="fa fa-calendar"></i></span>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="fresult" class="col-sm-3 control-label">{{ __("customer_result.form_attribute.result") }}</label>
    <div class="col-sm-9">
        <textarea class="form-control" name="result" id="fresult" placeholder="" aria-invalid="false">{!! $form_data->result !!}</textarea>
    </div>
</div>

<div class="form-group">
    <label for="fnote" class="col-sm-3 control-label">{{ __("customer_result.form_attribute.note") }}</label>
    <div class="col-sm-9">
        <textarea class="form-control" name="note" id="fnote" placeholder="" aria-invalid="false">{!! $form_data->note !!}</textarea>
    </div>
</div>

@endif


