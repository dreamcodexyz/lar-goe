<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body class="fixed-header menu-pin">

@include('includes.sidebar')

<!-- START PAGE-CONTAINER -->
<div class="page-container ">

    @include('includes.header')

    <!-- START PAGE CONTENT WRAPPER -->
    <div class="page-content-wrapper ">

        @yield('page-content-wrapper')

        <!-- START COPYRIGHT -->
        @include('includes.copyright')
        <!-- END COPYRIGHT -->

    </div>
    <!-- END PAGE CONTENT WRAPPER -->
</div>
<!-- END PAGE CONTAINER -->

@include('includes.quickview')

@include('includes.overlay')

@include('includes.footer')

</body>
</html>