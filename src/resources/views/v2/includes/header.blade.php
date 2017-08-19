@php ($session_data = Session::get('session_data'))

<div class="header p-r-0 bg-primary">
    <div class="header-inner header-md-height">
        <a href="#" class="btn-link toggle-sidebar hidden-lg-up pg pg-menu text-white" data-toggle="horizontal-menu"></a>
        <div class="">
            <div class="brand inline no-border hidden-xs-down">
                <img src="{{ asset('assets/img/logo_goe.png') }}" alt="logo" data-src="{{ asset('assets/img/logo_goe.png') }}" data-src-retina="{{ asset('assets/img/logo_goe.png') }}" width="78" height="22">
                {{--<img src="{{ asset('assets/img/logo_white.png') }}" alt="logo" data-src="{{ asset('assets/img/logo_white_2x.png') }}" data-src-retina="{{ asset('assets/img/logo_white_2x.png') }}" width="78" height="22">--}}
            </div>
            <!-- START NOTIFICATION LIST -->
            <ul class="hidden-md-down notification-list no-margin hidden-sm-down b-grey b-l b-r no-style p-l-30 p-r-20">
                <li class="p-r-10 inline">
                    <div class="dropdown">
                        <a href="javascript:;" id="notification-center" class="header-icon pg pg-world" data-toggle="dropdown">
                            {{--<span class="bubble"></span>--}}
                        </a>
                        <div class="dropdown-menu notification-toggle" role="menu" aria-labelledby="notification-center">
                            <div class="notification-panel">
                                <div class="notification-body scrollable">
                                    <div class="notification-item  clearfix">
                                        <div class="heading">
                                            <a href="#" class="text-danger pull-left">
                                                <span class="bold">{{ __("Chọn chi nhánh") }}</span>
                                            </a>
                                            @include('goe::includes.box_header.store')
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
            <!-- END NOTIFICATIONS LIST -->
            {{--<a href="#" class="search-link hidden-md-down" data-toggle="search"><i class="pg-search"></i>Type anywhere to <span class="bold">search</span></a>--}}


            <span class="hidden-md-down text-white">
                <span>Chi nhánh: <span class="font-weight-bold">{{ $session_data['current_store']['name'] }}</span></span>
            </span>

            <span class="hidden-md-down text-white">
                <span>-</span>
            </span>
            <span class="hidden-md-down text-white">
                @php
                    echo date("D j F Y, h:i A");
                @endphp
            </span>

        </div>
        <div class="d-flex align-items-center">
            <!-- START User Info-->
            @if (Auth::guest())
                <div class="dropdown pull-right">
                    <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="thumbnail-wrapper d32 circular inline m-t-5">
                    <img src="{{ asset('assets/img/profiles/avatar.jpg') }}" alt="" data-src="{{ asset('assets/img/profiles/avatar.jpg') }}" data-src-retina="{{ asset('assets/img/profiles/avatar_small2x.jpg') }}" width="32" height="32">
                </span>
                    </button>
                    <ul class="dropdown-menu profile-dropdown" role="menu">
                        <li><a href="{{ route('login') }}"><i class="pg-settings_small"></i> Login</a></li>
                        <li><a href="{{ route('register') }}"><i class="pg-settings_small"></i> Register</a></li>
                    </ul>
                </div>
            @else
                <div class="pull-left p-r-10 fs-14 font-heading hidden-md-down text-white">
                    <span>Xin chào, </span>
                    {{ Auth::user()->name }}
                </div>
                <div class="dropdown pull-right">
                    <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="thumbnail-wrapper d32 circular inline sm-m-r-5">
                            <img src="{{ asset('assets/img/profiles/avatar.jpg') }}" alt="" data-src="{{ asset('assets/img/profiles/avatar.jpg') }}" data-src-retina="{{ asset('assets/img/profiles/avatar_small2x.jpg') }}" width="32" height="32">
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
                        <a href="{{ route('settings') }}" class="dropdown-item"><i class="pg-settings_small"></i> Cài đặt</a>
                        {{--<a href="{{ route('settings/layout') }}" class="dropdown-item"><i class="pg-outdent"></i> Thông tin cá nhân</a>--}}
                        <a href="{{ route('logout') }}" class="clearfix bg-master-lighter dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <span class="pull-left">Đăng xuất</span>
                            <span class="pull-right"><i class="pg-power"></i></span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            @endif
            <!-- END User Info-->
            {{--<a href="#" class="header-icon pg pg-alt_menu btn-link m-l-10 sm-no-margin d-inline-block" data-toggle="quickview" data-toggle-element="#quickview"></a>--}}
        </div>
    </div>
    <div class="bg-white">
        <div class="container">
            <div class="menu-bar header-sm-height" data-pages-init='horizontal-menu' data-hide-extra-li="4">
                <a href="#" class="btn-link toggle-sidebar hidden-lg-up pg pg-close" data-toggle="horizontal-menu">
                </a>
                <ul>
                    <li>
                        <a href="{{ route('/') }}">{{ __("Trang chủ") }}</a>
                    </li>
                    @include('goe::includes.box_header.menu')
                </ul>
                {{--<a href="#" class="search-link d-flex justify-content-between align-items-center hidden-lg-up" data-toggle="search">Tap here to search <i class="pg-search float-right"></i></a>--}}
            </div>
        </div>
    </div>
</div>



