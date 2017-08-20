<div class="row">
<div class="col-lg-8">

    <div class="form-group row">
        <label for="fname" class="col-sm-3 col-form-label">{{ __("goe::customer.form_attribute.name") }}</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" value="{!! $form_data->name !!}" id="fname" placeholder="{{ __("customer.form_attribute.name") }}" name="name" required aria-required="true">
        </div>
    </div>

    <div class="form-group row">
        <label for="fphone" class="col-sm-3 col-form-label">{{ __("goe::customer.form_attribute.phone") }}</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" value="{!! $form_data->phone !!}" id="fphone" placeholder="{{ __("customer.form_attribute.phone") }}" name="phone" required="" aria-required="true">
        </div>
    </div>

    <div class="form-group row">
        <label for="fschool" class="col-sm-3 col-form-label">{{ __("goe::customer.form_attribute.school") }}</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" value="{!! $form_data->school !!}" id="fschool" placeholder="{{ __("customer.form_attribute.school") }}" name="school" required="" aria-required="true">
        </div>
    </div>

    <div class="form-group row">
        <label for="ffacebook" class="col-sm-3 col-form-label">{{ __("goe::customer.form_attribute.facebook") }}</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" value="{!! $form_data->facebook !!}" id="ffacebook" placeholder="{{ __("customer.form_attribute.facebook") }}" name="facebook" required="" aria-required="true">
        </div>
    </div>

    <div class="form-group row">
        <label for="birthday" class="col-sm-3 col-form-label">{{ __("goe::customer.form_attribute.birthday") }}</label>
        <div class="col-sm-9">
            <div id="customer_birthday" class="input-group date">
                <input type="text" value="{!! date('d-m-Y', strtotime($form_data->birthday))  !!}" name="birthday" class="form-control">
                <span id="birthday" class="input-group-addon"><i class="fa fa-calendar"></i></span>
            </div>
        </div>
    </div>


    <div class="form-group row">
        <label class="col-sm-3 col-form-label">{{ __("goe::customer.form_attribute.gender") }}</label>
        <div class="col-sm-9">
            <div class="radio radio-success">
                <input type="radio" value="1" {{ $form_data->gender == 1 ? 'checked' : '' }}  name="gender" id="male">
                <label for="male">{{ __("goe::customer.form_attribute.gender_m") }}</label>
                <input type="radio"  value="2" {{ $form_data->gender == 2 ? 'checked' : '' }} name="gender" id="female">
                <label for="female">{{ __("goe::customer.form_attribute.gender_f") }}</label>
            </div>
        </div>
    </div>


    <div class="form-group row">
        <label for="fnote" class="col-sm-3 col-form-label">{{ __("goe::customer.form_attribute.note") }}</label>
        <div class="col-sm-9">
            <textarea class="form-control" name="note" id="fnote" placeholder="" aria-invalid="false" style="height: 50px">{!! $form_data->note !!}</textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="reference_from" class="col-sm-3 col-form-label">{{ __("goe::customer.form_attribute.reference_from") }}</label>
        <div class="col-sm-9">
            <select id="reference_from" name="reference_from" class="custom-select" >
                @if (isset($reference_options))
                    @foreach ($reference_options as $ref)
                        <option value="{{ $ref['value'] }}" {{ $form_data->reference_from == $ref['value'] ? 'selected' : '' }}>{{ $ref['label'] }}</option>
                    @endforeach
                @endif
            </select>
        </div>
    </div>


    <div class="form-group row">
        <label for="factive" class="col-sm-3 col-form-label">{{ __("goe::customer.form_attribute.active") }}</label>
        <div class="col-sm-9">

            <select id="factive" name="is_actived" class="custom-select">
                @if (isset($active_options))
                    @foreach ($active_options as $status)
                        <option value="{{ $status['value'] }}" {{ $form_data->is_actived == $status['value'] ? 'selected' : '' }}>{{ $status['label'] }}</option>
                    @endforeach
                @endif
            </select>

        </div>
    </div>
</div>

<div class="col-lg-4">
    <div class="container-xs-height">
        <div class="row-xs-height">
            <div class="social-user-profile col-xs-height text-center col-top">
                <div class="thumbnail-wrapper d48 circular bordered b-white">
                    <img alt="Avatar" width="55" height="55" data-src-retina="{{ asset('assets/img/profiles/avatar_small2x.jpg') }}" data-src="{{ asset('assets/img/profiles/avatar.jpg') }}" src="{{ asset('assets/img/profiles/avatar_small2x.jpg') }}">
                </div>
                <br>
            </div>
            <div class="col-xs-height p-l-20">
                <h3 class="no-margin p-b-5">{!! $form_data->name !!}</h3>
                <p class="no-margin fs-16">{!! $form_data->note !!}</p>
                <p class="hint-text m-t-5 small">
                    <span>Sinh ngày: {!! date('d-m-Y', strtotime($form_data->birthday))  !!}</span> <br>
                    <span>Điện thoại: {!! $form_data->phone !!}</span> <br>
                    <span><a href="https://{!! $form_data->facebook !!}" target="_blank">{!! $form_data->facebook !!}</a></span> <br>
                    <span>Trạng thái: {{ $form_data->is_actived == '1' ? 'Mở' : 'Khóa' }}</span>
                </p>
            </div>
        </div>
    </div>
</div>

</div>
