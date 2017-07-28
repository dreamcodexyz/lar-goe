<!-- BEGIN SIDEBPANEL-->
<nav class="page-sidebar" data-pages="sidebar">
    <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
    <div class="sidebar-overlay-slide from-top" id="appMenu">
        <!--<div class="row">
            <div class="col-xs-6 no-padding">
                <a href="#" class="p-l-40"><img src="assets/img/demo/social_app.svg" alt="socail">
                </a>
            </div>
            <div class="col-xs-6 no-padding">
                <a href="#" class="p-l-10"><img src="assets/img/demo/email_app.svg" alt="socail">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 m-t-20 no-padding">
                <a href="#" class="p-l-40"><img src="assets/img/demo/calendar_app.svg" alt="socail">
                </a>
            </div>
            <div class="col-xs-6 m-t-20 no-padding">
                <a href="#" class="p-l-10"><img src="assets/img/demo/add_more.svg" alt="socail">
                </a>
            </div>
        </div>-->
    </div>
    <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
    <!-- BEGIN SIDEBAR MENU HEADER-->
    <div class="sidebar-header">
        <img src="{{ asset('assets/img/logo_goe_white.png') }}" alt="logo" class="brand" data-src="{{ asset('assets/img/logo_goe_white.png') }}" data-src-retina="{{ asset('assets/img/logo_goe_white.png') }}" width="40%" >
        <div class="sidebar-header-controls">
            <button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20" disabled data-pages-toggle="#appMenu"><i class="fa fa-angle-down fs-16"></i>
            </button>
            <button type="button" class="btn btn-link visible-lg-inline" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
            </button>
        </div>
    </div>
    <!-- END SIDEBAR MENU HEADER-->
    <!-- START SIDEBAR MENU -->
    <div class="sidebar-menu">
        <!-- BEGIN SIDEBAR MENU ITEMS-->
        <ul class="menu-items">
            <li class="m-t-30 {{ (Request::is('/') ? 'open active' : '') }}">
                <a href="{{ url('/') }}">
                    <span class="title">Trang chủ</span>
                </a>
                <span class="bg-success icon-thumbnail"><i class="pg-home"></i></span>
            </li>

            <li class="{{ (
                    Request::is('teacher') || Request::is('teacher/*') || Request::is('classes')  || Request::is('classes/*' || Request::is('document') || Request::is('document/*') ||
                    Request::is('customer/new')  || Request::is('customer/wait_for_test') || Request::is('customer/trial') || Request::is('customer/learning') || Request::is('customer/leave') || Request::is('consult') || Request::is('consult/*')
                ) ? 'open active' : '' ) }}">
                <a href="javascript:;">
                    <span class="title">Học viện</span>
                    <span class=" arrow"></span>
                </a>

                <span class="icon-thumbnail">H</span>
                <ul class="sub-menu">
                    <li class=" {{ ( Request::is('teacher') || Request::is('teacher/*')  ? 'open active' : '' ) }} ">
                        <a href="{{ url('/teacher') }}">Giáo viên</a>
                        <span class="icon-thumbnail">B</span>
                    </li>

                    <li class=" {{ ( Request::is('customer/new')  || Request::is('customer/wait_for_test') || Request::is('customer/trial') || Request::is('customer/learning') || Request::is('customer/leave') || Request::is('consult') || Request::is('consult/*')  ? 'open active' : '' ) }} ">
                        <a href="javascript:;"><span class="title">Học viên</span>
                            <span class="arrow"></span></a>
                        <span class="icon-thumbnail">S</span>
                        <ul class="sub-menu">
                            <li class="">
                                <a href="{{ url('/customer/new') }}">Thêm học viên mới</a>
                                <span class="icon-thumbnail">S</span>
                            </li>
                            <li class="">
                                <a href="{{ url('/consult') }}">Cần tư vấn</a>
                                <span class="icon-thumbnail">C</span>
                            </li>
                            <li class="">
                                <a href="{{ url('/customer/wait_for_test') }}">Hẹn test</a>
                                <span class="icon-thumbnail">T</span>
                            </li>

                            <li class="">
                                <a href="{{ url('/consult/wait') }}">Chờ đăng ký</a>
                                <span class="icon-thumbnail">W</span>
                            </li>

                            <li class="">
                                <a href="{{ url('/customer/trial') }}">Học thử</a>
                                <span class="icon-thumbnail">R</span>
                            </li>
                            <li class="">
                                <a href="{{ url('/customer/learning') }}">Đang học</a>
                                <span class="icon-thumbnail">L</span>
                            </li>
                            <li class="">
                                <a href="{{ url('/customer/leave') }}">Đã nghỉ</a>
                                <span class="icon-thumbnail">L</span>
                            </li>
                        </ul>
                    </li>

                    <li class="{{ ( Request::is('classes') || Request::is('classes/*')  ? 'open active' : '' ) }} ">
                        <a href="{{ url('/classes') }}">Danh sách lớp</a>
                        <span class="icon-thumbnail">Cl</span>
                    </li>

                    <li class=" {{ ( Request::is('document') || Request::is('document/*')  ? 'open active' : '' ) }}">
                        <a href="{{ url('/document') }}">Tài liệu</a>
                        <span class="icon-thumbnail">D</span>
                    </li>
                    <li class=" {{ ( Request::is('stores') || Request::is('stores/*')  ? 'open active' : '' ) }}">
                        <a href="{{ url('/stores') }}">Chi nhánh</a>
                        <span class="icon-thumbnail">S</span>
                    </li>
                </ul>
            </li>

            <li class="{{ ( Request::is('customer') || Request::is('customer/result') || Request::is('parent') || Request::is('parent/*') || Request::is('customer/result/*') ? 'open active' : '' ) }}">
                <a href="javascript:;"><span class="title">Học viên</span>
                    <span class="arrow"></span></a>
                <span class="icon-thumbnail">C</span>
                <ul class="sub-menu">


                    <li class="{{ ( Request::is('customer') || Request::is('customer/*') && !(Request::is('customer/result') || Request::is('customer/result/*')) ? 'open active' : '' ) }}">
                        <a href="{{ url('/customer') }}">Danh sách học viên</a>
                        <span class="icon-thumbnail">L</span>
                    </li>

                    <li class="{{ ( Request::is('customer/result') || Request::is('customer/result/*') ? 'open active' : '' ) }}">
                        <a href="{{ url('/customer/result') }}">Kết quả học tập</a>
                        <span class="icon-thumbnail">T</span>
                    </li>

                    <li class="{{ ( Request::is('parent') || Request::is('parent/*') ? 'open active' : '' ) }}">
                        <a href="{{ url('/parent') }}">Phụ huynh</a>
                        <span class="icon-thumbnail">P</span>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;"><span class="title">Tiến độ</span>
                    <span class=" arrow"></span></a>
                <span class="icon-thumbnail">K</span>
                <ul class="sub-menu">

                    <li class="">
                        <a href="{{ url('/lesson') }}">Nội dung bài học</a>
                        <span class="icon-thumbnail">L</span>
                    </li>

                    <li class="">
                        <a href="{{ url('/content_test/speaking') }}">Speaking Test</a>
                        <span class="icon-thumbnail">ST</span>
                    </li>

                    <li class="">
                        <a href="{{ url('/content_test/writing') }}">Writing Test</a>
                        <span class="icon-thumbnail">WT</span>
                    </li>

                    <li class="">
                        <a href="{{ url('/learning_process') }}">Tiến độ học tập</a>
                        <span class="icon-thumbnail">LP</span>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;"><span class="title">Phụ đạo</span>
                    <span class=" arrow"></span></a>
                <span class="icon-thumbnail">K</span>
                <ul class="sub-menu">
                    <li class="">
                        <a href="{{ url('/extra_help') }}">Học viên</a>
                        <span class="icon-thumbnail">EH</span>
                    </li>
                    <li class="">
                        <a href="{{ url('/extra_help/new') }}">Thêm mới</a>
                        <span class="icon-thumbnail">AD</span>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;"><span class="title">Quản lý kho</span>
                    <span class=" arrow"></span></a>
                <span class="icon-thumbnail">K</span>
                <ul class="sub-menu">
                    <li class="">
                        <a href="{{ url('/inventory') }}">Danh sách đồ dùng</a>
                        <span class="icon-thumbnail">D</span>
                    </li>
                    <li class="">
                        <a href="{{ url('/inventory/new') }}">Thêm mới</a>
                        <span class="icon-thumbnail">T</span>
                    </li>
                </ul>
            </li>




            {{--<li>--}}
                {{--<a href="javascript:;"><span class="title">Cài đặt</span>--}}
                    {{--<span class=" arrow"></span></a>--}}
                {{--<span class="icon-thumbnail"><i class="pg-settings"></i></span>--}}
                {{--<ul class="sub-menu">--}}
                    {{--<li class="">--}}
                        {{--<a href="{{ url('/settings/general') }}">Cài đặt chung</a>--}}
                        {{--<span class="icon-thumbnail">c</span>--}}
                    {{--</li>--}}
                    {{--<li class="">--}}
                        {{--<a href="{{ url('/settings/advanced') }}">Advanced</a>--}}
                        {{--<span class="icon-thumbnail">c</span>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}

            {{--<li>--}}
                {{--<a href="javascript:;"><span class="title">Example</span>--}}
                    {{--<span class=" arrow"></span></a>--}}
                {{--<span class="icon-thumbnail"><i class="pg-settings"></i></span>--}}
                {{--<ul class="sub-menu">--}}
                    {{--<li class="">--}}
                        {{--<a href="{{ url('/example/grid') }}">Grid</a>--}}
                        {{--<span class="icon-thumbnail">c</span>--}}
                    {{--</li>--}}
                    {{--<li class="">--}}
                        {{--<a href="{{ url('/example/form') }}">Form</a>--}}
                        {{--<span class="icon-thumbnail">c</span>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}




            {{--<li class="">--}}
                {{--<a href="http://pages.revox.io/dashboard/latest/html/widget.html" class="detailed">--}}
                    {{--<span class="title">Widgets</span>--}}
                    {{--<span class="details">22 items</span>--}}
                {{--</a>--}}
                {{--<span class="icon-thumbnail">W</span>--}}
            {{--</li>--}}
            <!--<li class="">
                <a href="email.html" class="detailed">
                    <span class="title">Email</span>
                    <span class="details">234 New Emails</span>
                </a>
                <span class="icon-thumbnail"><i class="pg-mail"></i></span>
            </li>
            <li class="">
                <a href="social.html"><span class="title">Social</span></a>
                <span class="icon-thumbnail"><i class="pg-social"></i></span>
            </li>
            <li>
                <a href="javascript:;"><span class="title">Calendar</span>
                    <span class=" arrow"></span></a>
                <span class="icon-thumbnail"><i class="pg-calender"></i></span>
                <ul class="sub-menu">
                    <li class="">
                        <a href="calendar.html">Basic</a>
                        <span class="icon-thumbnail">c</span>
                    </li>
                    <li class="">
                        <a href="calendar_lang.html">Languages</a>
                        <span class="icon-thumbnail">L</span>
                    </li>
                    <li class="">
                        <a href="calendar_month.html">Month</a>
                        <span class="icon-thumbnail">M</span>
                    </li>
                    <li class="">
                        <a href="calendar_lazy.html">Lazy load</a>
                        <span class="icon-thumbnail">La</span>
                    </li>
                    <li class="">
                        <a href="http://pages.revox.io/dashboard/2.1.0/doc/#calendar" target="_blank">Documentation</a>
                        <span class="icon-thumbnail">D</span>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="builder.html">
                    <span class="title">Builder</span>
                </a>
                <span class="icon-thumbnail"><i class="pg-layouts"></i></span>
            </li>
            <li class="open active">
                <a href="javascript:;"><span class="title">Layouts</span>
                    <span class=" open  arrow"></span></a>
                <span class="icon-thumbnail"><i class="pg-layouts2"></i></span>
                <ul class="sub-menu">
                    <li class="">
                        <a href="default_layout.html">Default</a>
                        <span class="icon-thumbnail">dl</span>
                    </li>
                    <li class="">
                        <a href="secondary_layout.html">Secondary</a>
                        <span class="icon-thumbnail">sl</span>
                    </li>
                    <li class="">
                        <a href="boxed_layout.html">Boxed</a>
                        <span class="icon-thumbnail">bl</span>
                    </li>
                    <li class="">
                        <a href="sidemenu_and_horizontal_menu.html">Horizontal Menu</a>
                        <span class="icon-thumbnail">hm</span>
                    </li>
                    <li class="">
                        <a href="rtl_layout.html">RTL</a>
                        <span class="icon-thumbnail">rl</span>
                    </li>
                    <li class="">
                        <a href="builder.html#tabContent">Columns</a>
                        <span class="icon-thumbnail">cl</span>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><span class="title">UI Elements</span>
                    <span class=" arrow"></span></a>
                <span class="icon-thumbnail">Ui</span>
                <ul class="sub-menu">
                    <li class="">
                        <a href="color.html">Color</a>
                        <span class="icon-thumbnail">c</span>
                    </li>
                    <li class="">
                        <a href="typography.html">Typography</a>
                        <span class="icon-thumbnail">t</span>
                    </li>
                    <li class="">
                        <a href="icons.html">Icons</a>
                        <span class="icon-thumbnail">i</span>
                    </li>
                    <li class="">
                        <a href="buttons.html">Buttons</a>
                        <span class="icon-thumbnail">b</span>
                    </li>
                    <li class="">
                        <a href="notifications.html">Notifications</a>
                        <span class="icon-thumbnail">n</span>
                    </li>
                    <li class="">
                        <a href="modals.html">Modals</a>
                        <span class="icon-thumbnail">m</span>
                    </li>
                    <li class="">
                        <a href="progress.html">Progress &amp; Activity</a>
                        <span class="icon-thumbnail">pa</span>
                    </li>
                    <li class="">
                        <a href="tabs_accordian.html">Tabs &amp; Accordions</a>
                        <span class="icon-thumbnail">ta</span>
                    </li>
                    <li class="">
                        <a href="sliders.html">Sliders</a>
                        <span class="icon-thumbnail">s</span>
                    </li>
                    <li class="">
                        <a href="tree_view.html">Tree View</a>
                        <span class="icon-thumbnail">tv</span>
                    </li>
                    <li class="">
                        <a href="nestables.html">Nestable</a>
                        <span class="icon-thumbnail">ns</span>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <span class="title">Forms</span>
                    <span class=" arrow"></span>
                </a>
                <span class="icon-thumbnail"><i class="pg-form"></i></span>
                <ul class="sub-menu">
                    <li class="">
                        <a href="form_elements.html">Form Elements</a>
                        <span class="icon-thumbnail">fe</span>
                    </li>
                    <li class="">
                        <a href="form_layouts.html">Form Layouts</a>
                        <span class="icon-thumbnail">fl</span>
                    </li>
                    <li class="">
                        <a href="form_wizard.html">Form Wizard</a>
                        <span class="icon-thumbnail">fw</span>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="portlets.html">
                    <span class="title">Portlets</span>
                </a>
                <span class="icon-thumbnail"><i class="pg-grid"></i></span>
            </li>
            <li class="">
                <a href="views.html">
                    <span class="title">Views</span>
                </a>
                <span class="icon-thumbnail"><i class="pg pg-ui"></i></span>
            </li>
            <li>
                <a href="javascript:;"><span class="title">Tables</span>
                    <span class=" arrow"></span></a>
                <span class="icon-thumbnail"><i class="pg-tables"></i></span>
                <ul class="sub-menu">
                    <li class="">
                        <a href="tables.html">Basic Tables</a>
                        <span class="icon-thumbnail">bt</span>
                    </li>
                    <li class="">
                        <a href="datatables.html">Data Tables</a>
                        <span class="icon-thumbnail">dt</span>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><span class="title">Maps</span>
                    <span class=" arrow"></span></a>
                <span class="icon-thumbnail"><i class="pg-map"></i></span>
                <ul class="sub-menu">
                    <li class="">
                        <a href="google_map.html">Google Maps</a>
                        <span class="icon-thumbnail">gm</span>
                    </li>
                    <li class="">
                        <a href="vector_map.html">Vector Maps</a>
                        <span class="icon-thumbnail">vm</span>
                    </li>
                </ul>
            </li>-->
            {{--<li class="">--}}
                {{--<a href="charts.html"><span class="title">Charts</span></a>--}}
                {{--<span class="icon-thumbnail"><i class="pg-charts"></i></span>--}}
            {{--</li>--}}

            {{--<li class="">--}}
                {{--<a href="javascript:;"><span class="title">Menu Levels</span>--}}
                    {{--<span class="arrow"></span></a>--}}
                {{--<span class="icon-thumbnail"><i class="pg-menu_lv"></i></span>--}}
                {{--<ul class="sub-menu">--}}
                    {{--<li>--}}
                        {{--<a href="javascript:;">Level 1</a>--}}
                        {{--<span class="icon-thumbnail">L1</span>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="javascript:;"><span class="title">Level 2</span>--}}
                            {{--<span class="arrow"></span></a>--}}
                        {{--<span class="icon-thumbnail">L2</span>--}}
                        {{--<ul class="sub-menu">--}}
                            {{--<li>--}}
                                {{--<a href="javascript:;">Sub Menu</a>--}}
                                {{--<span class="icon-thumbnail">Sm</span>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="ujavascript:;">Sub Menu</a>--}}
                                {{--<span class="icon-thumbnail">Sm</span>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="">--}}
                {{--<a href="http://pages.revox.io/dashboard/2.2.0/docs/" target="_blank"><span class="title">Docs</span></a>--}}
                {{--<span class="icon-thumbnail"><i class="pg-note"></i></span>--}}
            {{--</li>--}}
            <li class="">
                <a href="http://changelog.pages.revox.io/" target="_blank"><span class="title">Changelog</span></a>
                <span class="icon-thumbnail">Cl</span>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <!-- END SIDEBAR MENU -->
</nav>
<!-- END SIDEBAR -->
<!-- END SIDEBPANEL-->