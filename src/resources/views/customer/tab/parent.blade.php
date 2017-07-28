<input type="hidden" name="parent[id]" value="{!! $form_data->parent()->value('id') !!}">
<div class="form-group">
    <label for="fpname" class="col-sm-3 control-label">{{ __("parent.form_attribute.name") }}</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" value="{!! $form_data->parent()->value('name') !!}" id="fpname" placeholder="{{ __("parent.form_attribute.name") }}" name="parent[name]" required="" aria-required="true">
    </div>
</div>

<div class="form-group">
    <label for="fgphone" class="col-sm-3 control-label">{{ __("parent.form_attribute.phone") }}</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" value="{!! $form_data->parent()->value('phone') !!}" id="fgphone" placeholder="{{ __("parent.form_attribute.phone") }}" name="parent[phone]" required="" aria-required="true">
    </div>
</div>

<div class="form-group">
    <label for="fpfacebook" class="col-sm-3 control-label">{{ __("parent.form_attribute.facebook") }}</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" value="{!! $form_data->parent()->value('facebook') !!}" id="fpfacebook" placeholder="{{ __("parent.form_attribute.facebook") }}" name="parent[facebook]" required="" aria-required="true">
    </div>
</div>

<div class="form-group">
    <label for="fpemail" class="col-sm-3 control-label">{{ __("parent.form_attribute.email") }}</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" value="{!! $form_data->parent()->value('email') !!}" id="fpemail" placeholder="{{ __("parent.form_attribute.email") }}" name="parent[email]" required="" aria-required="true">
    </div>
</div>

<div class="form-group">
    <label for="fpnote" class="col-sm-3 control-label">{{ __("parent.form_attribute.note") }}</label>
    <div class="col-sm-9">
        <textarea class="form-control" name="parent[note]" id="fpnote" placeholder="" aria-invalid="false">{!! $form_data->parent()->value('note') !!}</textarea>
    </div>
</div>

<div class="form-group">
    <label for="fphope" class="col-sm-3 control-label">{{ __("parent.form_attribute.hope") }}</label>
    <div class="col-sm-9">
        <select id="fphope" name="parent[hope]" class="hope_options_select cs-select cs-skin-slide" data-init-plugin="cs-select">
            @if (isset($parent_hope_options))
                @foreach ($parent_hope_options as $ref)
                    <option value="{{ $ref['value'] }}" {{ $form_data->parent()->value('hope') == $ref['value'] ? 'selected' : '' }}>{{ $ref['label'] }}</option>
                @endforeach
            @endif
        </select>
    </div>
</div>







