
<div class="form-group">
    <label for="fname" class="col-sm-3 control-label">{{ __("customer.form_attribute.name") }}</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" value="{!! $form_data->name !!}" id="fname" placeholder="{{ __("customer.form_attribute.name") }}" name="name" required aria-required="true">
    </div>
</div>

<div class="form-group">
    <label for="fphone" class="col-sm-3 control-label">{{ __("customer.form_attribute.phone") }}</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" value="{!! $form_data->phone !!}" id="fphone" placeholder="{{ __("customer.form_attribute.phone") }}" name="phone" required="" aria-required="true">
    </div>
</div>

<div class="form-group">
    <label for="fschool" class="col-sm-3 control-label">{{ __("customer.form_attribute.school") }}</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" value="{!! $form_data->school !!}" id="fschool" placeholder="{{ __("customer.form_attribute.school") }}" name="school" required="" aria-required="true">
    </div>
</div>

<div class="form-group">
    <label for="ffacebook" class="col-sm-3 control-label">{{ __("customer.form_attribute.facebook") }}</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" value="{!! $form_data->facebook !!}" id="ffacebook" placeholder="{{ __("customer.form_attribute.facebook") }}" name="facebook" required="" aria-required="true">
    </div>
</div>

<div class="form-group">
    <label for="birthday" class="col-sm-3 control-label">{{ __("customer.form_attribute.birthday") }}</label>
    <div class="col-sm-2">
        <div id="customer_birthday" class="input-group date">
            <input type="text" value="{!! date('d-m-Y', strtotime($form_data->birthday))  !!}" name="birthday" class="form-control">
            <span id="birthday" class="input-group-addon"><i class="fa fa-calendar"></i></span>
        </div>
    </div>
</div>


<div class="form-group">
    <label class="col-sm-3 control-label">{{ __("customer.form_attribute.gender") }}</label>
    <div class="col-sm-9">
        <div class="radio radio-success">
            <input type="radio" value="1" {{ $form_data->gender == 1 ? 'checked' : '' }}  name="gender" id="male">
            <label for="male">{{ __("customer.form_attribute.gender_m") }}</label>
            <input type="radio"  value="2" {{ $form_data->gender == 2 ? 'checked' : '' }} name="gender" id="female">
            <label for="female">{{ __("customer.form_attribute.gender_f") }}</label>
        </div>
    </div>
</div>


<div class="form-group">
    <label for="fnote" class="col-sm-3 control-label">{{ __("customer.form_attribute.note") }}</label>
    <div class="col-sm-9">
        <textarea class="form-control" name="note" id="fnote" placeholder="" aria-invalid="false">{!! $form_data->note !!}</textarea>
    </div>
</div>

<div class="form-group">
    <label for="reference_from" class="col-sm-3 control-label">{{ __("customer.form_attribute.reference_from") }}</label>
    <div class="col-sm-9">
        <select id="reference_from" name="reference_from" class="reference_options_select cs-select cs-skin-slide" data-init-plugin="cs-select">
            @if (isset($reference_options))
                @foreach ($reference_options as $ref)
                    <option value="{{ $ref['value'] }}" {{ $form_data->reference_from == $ref['value'] ? 'selected' : '' }}>{{ $ref['label'] }}</option>
                @endforeach
            @endif
        </select>
    </div>
</div>


<div class="form-group">
    <label for="factive" class="col-sm-3 control-label">{{ __("customer.form_attribute.active") }}</label>
    <div class="col-sm-9">

        <select id="factive" name="is_actived" class="active_options_select cs-select cs-skin-slide" data-init-plugin="cs-select">
            @if (isset($active_options))
                @foreach ($active_options as $status)
                    <option value="{{ $status['value'] }}" {{ $form_data->actived == $status['value'] ? 'selected' : '' }}>{{ $status['label'] }}</option>
                @endforeach
            @endif
        </select>

    </div>
</div>



