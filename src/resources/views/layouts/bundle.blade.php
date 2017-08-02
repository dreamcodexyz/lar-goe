<!doctype html>
<html>
<head>
    @include('includes.bundle.head')
</head>
<body class="fixed-header dashboard">

@include('includes.bundle.sidebar')

<!-- START PAGE-CONTAINER -->
<div class="page-container ">

    {{-- @include('includes.header') --}}
    @include('includes.bundle.header')

    <!-- START PAGE CONTENT WRAPPER -->
    <div class="page-content-wrapper ">

        @yield('page-content-wrapper')

        <!-- START COPYRIGHT -->
        @include('includes.bundle.copyright')
        <!-- END COPYRIGHT -->

    </div>
    <!-- END PAGE CONTENT WRAPPER -->
</div>
<!-- END PAGE CONTAINER -->

@include('includes.bundle.quickview')

@include('includes.bundle.overlay')

@include('includes.bundle.footer')
</body>
</html>