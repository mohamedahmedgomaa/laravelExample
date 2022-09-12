<!DOCTYPE html >
<html class="loading" lang="{{ app()->getLocale() }}"
      data-textdirection="@if(Config::get('app.locale') == "en") ltr @else rtl @endif">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {!! Html::meta('viewport', 'width=device-width, initial-scale=1, shrink-to-fit=no') !!}
    {!! Html::meta('description', 'Laravel administration area.') !!}
    {!! Html::meta('author', 'Laravel') !!}
    {!! Html::meta('keywords', 'admin, dashboard, Laravel') !!}
    {!! Html::meta('csrf-token', csrf_token() ) !!}
    {!! Html::meta('_token', csrf_token() ) !!}

    <title>@yield('title')</title>
    @include('admins.includes.layout.head')
    @stack('css')
    @yield('page-css')
    @livewireStyles

</head>

<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click"
      data-menu="vertical-menu-modern" data-col="2-columns">
@include('admins.includes.layout.nav')
@include('admins.includes.layout.mainMenu')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-body">
            <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">@yield('title')</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a id="home"
                                            href="#">{{trans('admin.dashboard')}}</a>
                                </li>
                                <li class="breadcrumb-item">@yield('main-title')
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            @yield('content')
        </div>
    </div>
</div>
@include('admins.includes.layout.footer')
@livewireScripts
@include('admins.includes.layout.foot')
@stack('js')
@yield('page-script')

</body>
</html>
