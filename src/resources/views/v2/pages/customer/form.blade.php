@push('end-head')
    <link media="screen" type="text/css" rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-datepicker/css/datepicker3.css') }}">
@endpush

<form id="form_id" method="POST" action="{{ url('customer/save') }}" class="form-horizontal" role="form" autocomplete="off" novalidate="novalidate">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{!! $form_data->id !!}">

    <div class="col-lg-12">
        <div class="card card-borderless">
            <ul class="nav nav-tabs nav-tabs-simple hidden-sm-down" role="tablist" data-init-reponsive-tabs="dropdownfx">
                <li class="nav-item">
                    <a class="active" data-toggle="tab" role="tab" data-target="#tab1" href="#" aria-expanded="true">Thông tin cá nhân</a>
                </li>
                <li class="nav-item">
                    <a href="#" data-toggle="tab" role="tab" data-target="#tab2" class="" aria-expanded="false">Phụ huynh</a>
                </li>
                <li class="nav-item">
                    <a href="#" data-toggle="tab" role="tab" data-target="#tab3" class="" aria-expanded="false">Thông tin học tập</a>
                </li>
                <li class="nav-item">
                    <a href="#" data-toggle="tab" role="tab" data-target="#tab4" class="" aria-expanded="false">Kết quả</a>
                </li>
                <li class="nav-item">
                    <a href="#" data-toggle="tab" role="tab" data-target="#tab5" class="" aria-expanded="false">Lớp</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="tab1" aria-expanded="true">
                    <div class="row column-seperation">
                        <div class="col-sm-12">
                            @include('goe::pages.customer.tab.general')
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab2" aria-expanded="false">
                    <div class="row">
                        <div class="col-sm-12">
                            {{--@include('goe::customer.tab.parent')--}}
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab3" aria-expanded="false">
                    <div class="row">
                        <div class="col-sm-12">
                            {{--@include('goe::customer.tab.learning')--}}
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="tab4" aria-expanded="false">
                    <div class="row">
                        <div class="col-sm-12">
                            {{--@include('goe::customer.tab.result')--}}
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="tab5" aria-expanded="false">
                    <div class="row">
                        <div class="col-sm-12">
                            {{--@include('goe::customer.tab.class')--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row  m-b-50">
            <div class="col-sm-12">
                <p>{{ __("goe::common.text_comfirm_save_form") }}</p>
                <button class="btn btn-complete btn-md" type="submit">{{ __('goe::common.save') }}</button>
                <button class="btn btn-complete btn-md" name="save_and_continue" value="1" type="submit">{{ __('goe::common.save_and_continue') }}</button>
            </div>
        </div>

    </div>

</form>

@push('end-foot')
    <script type="text/javascript" src="{{ asset('assets/plugins/classie/classie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-validation/js/jquery.validate.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function($) {

            $('#customer_birthday').datepicker({
                format: 'dd-mm-yyyy'
            });

            $('#form_id').validate();
        });
    </script>

@endpush










