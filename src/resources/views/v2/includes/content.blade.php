@extends('layouts.default')
@section('page-content-wrapper')

    <div class="content ">

        {{-- @include('includes.content_box.breadcrumb') --}}

        @include('includes.content_box.header')

        {{-- @include('includes.content_box.notification') --}}

        @yield('page-content')

    </div>

@stop