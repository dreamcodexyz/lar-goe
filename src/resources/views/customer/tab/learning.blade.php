<div class="form-group">
    <label for="fstatus" class="col-sm-3 control-label">{{ __("goe::customer.form_attribute.status") }}</label>
    <div class="col-sm-9">

        <select id="fstatus" name="status" class="status_options_select cs-select cs-skin-slide" data-init-plugin="cs-select">
            @if (isset($status_options))
                @foreach ($status_options as $status)
                    <option value="{{ $status['value'] }}" {{ $form_data->status == $status['value'] ? 'selected' : '' }}>{{ $status['label'] }}</option>
                @endforeach
            @endif
        </select>

    </div>
</div>

<div class="form-group">
    <label for="fstore_id" class="col-sm-3 control-label">{{ __("goe::customer.form_attribute.store") }}</label>
    <div class="col-sm-9">

        <select id="fstore_id" name="store_id" class="store_options_select cs-select cs-skin-slide" data-init-plugin="cs-select">
            @if (isset($store_options))
                @foreach ($store_options as $status)
                    <option value="{{ $status['value'] }}" {{ $form_data->store_id == $status['value'] ? 'selected' : '' }}>{{ $status['label'] }}</option>
                @endforeach
            @endif
        </select>

    </div>
</div>








