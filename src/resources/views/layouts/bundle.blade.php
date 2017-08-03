<!doctype html>
<html>
<head>
    @include('goe::includes.bundle.head')
</head>
<body class="fixed-header dashboard">

@include('goe::includes.bundle.sidebar')

<!-- START PAGE-CONTAINER -->
<div class="page-container ">

    {{-- @include('includes.header') --}}
    @include('goe::includes.bundle.header')

    <!-- START PAGE CONTENT WRAPPER -->
    <div class="page-content-wrapper ">

        @yield('page-content-wrapper')

        <!-- START COPYRIGHT -->
        @include('goe::includes.bundle.copyright')
        <!-- END COPYRIGHT -->

    </div>
    <!-- END PAGE CONTENT WRAPPER -->
</div>
<!-- END PAGE CONTAINER -->

@include('goe::includes.bundle.quickview')

@include('goe::includes.bundle.overlay')

@include('goe::includes.bundle.footer')
</body>
</html>