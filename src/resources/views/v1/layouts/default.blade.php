<!doctype html>
<html>
<head>
    @include('goe::includes.head')
</head>
<body class="fixed-header menu-pin">

@include('goe::includes.sidebar')

<!-- START PAGE-CONTAINER -->
<div class="page-container ">

    @include('goe::includes.header')

    <!-- START PAGE CONTENT WRAPPER -->
    <div class="page-content-wrapper ">

        @yield('page-content-wrapper')

        <!-- START COPYRIGHT -->
        @include('goe::includes.copyright')
        <!-- END COPYRIGHT -->

    </div>
    <!-- END PAGE CONTENT WRAPPER -->
</div>
<!-- END PAGE CONTAINER -->

@include('goe::includes.quickview')

@include('goe::includes.overlay')

@include('goe::includes.footer')

</body>
</html>