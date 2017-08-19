@extends('goe::layouts.blank')
@section('title', 'Go English Admin - Đăng nhập')

@section('content')

<div class="login-wrapper ">
    <!-- START Login Background Pic Wrapper-->
    <div class="bg-pic">
        <!-- START Background Pic-->
        <img src="{{ asset('assets/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg') }}" data-src="{{ asset('assets/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg') }}" data-src-retina="{{ asset('assets/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg') }}" alt="" class="lazy">
        <!-- END Background Pic-->
        <!-- START Background Caption-->
        <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
            <h2 class="semi-bold text-white">I may not be there yet, but I’m closer than I was yesterday.</h2>
            <p class="small">
                Copyright &copy; 2017 Go English.
            </p>
        </div>
        <!-- END Background Caption-->
    </div>
    <!-- END Login Background Pic Wrapper-->
    <!-- START Login Right Container-->
    <div class="login-container bg-white">
        <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
            <h1>Go English Admin</h1>
            <h4>Đăng nhập</h4>
            <p class="p-t-35">Xin vui lòng nhập các thông tin sau để đăng nhập vào hệ thống.</p>
            <!-- START Login Form -->
            <form id="form-login" class="p-t-15" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <!-- START Form Control-->
                <div class="form-group form-group-default form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label>Email</label>
                    <div class="controls">
                        <input type="text" name="email" placeholder="Email" class="form-control" value="{{ old('email') }}" required>
                    </div>

                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
                <!-- END Form Control-->
                <!-- START Form Control-->
                <div class="form-group form-group-default{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label>Mật khẩu</label>
                    <div class="controls">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <!-- START Form Control-->
                <div class="row">
                    <div class="col-md-6 no-padding">
                        <div class="checkbox ">
                            <input type="checkbox" name="remember" value="1" {{ old('remember') ? 'checked' : '' }} id="checkbox1">
                            <label for="checkbox1">Keep Me Signed in</label>
                        </div>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('password.request') }}" class="text-info small">Quên mật khẩu?</a> |
                        <a href="{{ route('register') }}" class="text-info small">Đăng ký</a>
                    </div>
                </div>
                <!-- END Form Control-->
                <button class="btn btn-primary btn-cons m-t-10" type="submit">Đăng nhập</button>
            </form>
            <!--END Login Form-->
            <div class="pull-bottom sm-pull-bottom">

                <div class="copyright sm-text-center">
                    <p class="small no-margin">
                        <span class="hint-text">Copyright &copy; 2017 </span>
                        <span class="font-montserrat">Go English</span>.
                        <span class="hint-text">All rights reserved. </span>

                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- END Login Right Container-->
</div>

@endsection

@section('end-foot')

<script src="{{ asset('assets/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
<!-- END VENDOR JS -->
<script src="{{ asset('pages/js/pages.min.js') }}"></script>
<script>
    $(function()
    {
        $('#form-login').validate()
    })
</script>

@endsection