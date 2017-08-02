<!-- START HEADER -->
<div class="header ">
    <!-- START MOBILE CONTROLS -->
    <div class="container-fluid relative">
        <!-- LEFT SIDE -->
        <div class="pull-left full-height visible-sm visible-xs">
            <!-- START ACTION BAR -->
            <div class="header-inner">
                <a href="#" class="btn-link toggle-sidebar visible-sm-inline-block visible-xs-inline-block padding-5" data-toggle="sidebar">
                    <span class="icon-set menu-hambuger"></span>
                </a>
            </div>
            <!-- END ACTION BAR -->
        </div>
        <div class="pull-center hidden-md hidden-lg">
            <div class="header-inner">
                <div class="brand inline">
                    <img src="{{ asset('assets/img/logo_goe.png') }}" alt="logo" data-src="{{ asset('assets/img/logo_goe.png') }}" data-src-retina="{{ asset('assets/img/logo_goe.png') }}" width="78" height="22">
                </div>
            </div>
        </div>
        <!-- RIGHT SIDE -->
        <div class="pull-right full-height visible-sm visible-xs">
            <!-- START ACTION BAR -->
            <div class="header-inner">
                <a href="#" class="btn-link visible-sm-inline-block visible-xs-inline-block" data-toggle="quickview" data-toggle-element="#quickview">
                    <span class="icon-set menu-hambuger-plus"></span>
                </a>
            </div>
            <!-- END ACTION BAR -->
        </div>
    </div>
    <!-- END MOBILE CONTROLS -->
    <div class=" pull-left sm-table hidden-xs hidden-sm">
        <div class="header-inner">
            <div class="brand inline">
                <img src="{{ asset('assets/img/logo_goe.png') }}" alt="logo" data-src="{{ asset('assets/img/logo_goe.png') }}" data-src-retina="{{ asset('assets/img/logo_goe.png') }}" width="40%" >
            </div>
            <!-- START NOTIFICATION LIST -->
            <ul class="notification-list no-margin hidden-sm hidden-xs b-grey b-l b-r no-style p-l-30 p-r-20">

                @include('includes.header_box.notification')

                <li class="p-r-15 inline">
                    <a href="#" class="icon-set clip "></a>
                </li>
                <li class="p-r-15 inline">
                    <a href="#" class="icon-set grid-box"></a>
                </li>
            </ul>
            <!-- END NOTIFICATIONS LIST -->
            {{--<a href="#" class="search-link" data-toggle="search"><i class="pg-search"></i>Type anywhere to <span class="bold">search</span></a>--}}

        </div>
    </div>
    <div class=" pull-right">
        <div class="header-inner">
            <a href="#" class="btn-link icon-set menu-hambuger-plus m-l-20 sm-no-margin hidden-sm hidden-xs" data-toggle="quickview" data-toggle-element="#quickview"></a>
        </div>
    </div>
    <div class=" pull-right">

        <!-- START User Info-->
        <div class="visible-lg visible-md m-t-10">

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


            <div class="pull-left p-r-10 p-t-10 fs-16 font-heading">
                {{ Auth::user()->name }}
            </div>
            <div class="dropdown pull-right">
                <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="thumbnail-wrapper d32 circular inline m-t-5">
                <img src="{{ asset('assets/img/profiles/avatar.jpg') }}" alt="" data-src="{{ asset('assets/img/profiles/avatar.jpg') }}" data-src-retina="{{ asset('assets/img/profiles/avatar_small2x.jpg') }}" width="32" height="32">
            </span>
                </button>
                <ul class="dropdown-menu profile-dropdown" role="menu">

                    <li><a href="#"><i class="pg-settings_small"></i> Settings</a>
                    </li>
                    <li><a href="#"><i class="pg-outdent"></i> Feedback</a>
                    </li>
                    <li><a href="#"><i class="pg-signals"></i> Help</a>
                    </li>
                    <li class="bg-master-lighter">
                        <a href="{{ route('logout') }}" class="clearfix" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <span class="pull-left">Logout</span>
                            <span class="pull-right"><i class="pg-power"></i></span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>

            @endif
        </div>
        <!-- END User Info-->
    </div>
</div>
<!-- END HEADER -->