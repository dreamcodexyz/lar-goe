<!doctype html>
<html>
<head>
    @include('goe::includes.head')
</head>
<body class="fixed-header menu-pin">

@include('goe::includes.sidebar')

<div class="page-container ">

    @include('goe::includes.header')

    <div class="page-content-wrapper ">

        @yield('page-content-wrapper')

        @include('goe::includes.copyright')

    </div>
</div>

@include('goe::includes.quickview')

@include('goe::includes.overlay')

@include('goe::includes.footer')

</body>
</html>