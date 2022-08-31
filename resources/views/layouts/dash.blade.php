<!DOCTYPE html>

<!-- <html lang="ar"> -->
@if (App::isLocale('ar'))
<html lang="ar" direction="rtl" dir="rtl" style="direction: rtl">
@else
<html lang="en" direction="ltr" dir="ltr" style="direction: ltr">
@endif

<!--begin::Head-->

<head>

    <base href="">
    <title>@yield('page-title','School')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <!--begin::Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    @yield('fonts')
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    @yield('page-vendor-sheets')
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    @if (App::isLocale('ar'))
    <link href="{{asset('assets/plugins/global/plugins.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
    @else
    <link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    @endif
    <!--end::Global Stylesheets Bundle-->
    <!--begin::page style-->
    @yield('style')
    <!--end::page style-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="page-loading-enabled page-loading header-fixed header-tablet-and-mobile-fixed aside-enabled aside-fixed"
    style="font-family: 'Cairo', sans-serif;">

    <!--begin::loader-->
    @include('metro.layout._loader')
    <!--end::Loader-->


    @include('metro.layout.master')


    <!--begin::Scrolltop-->
    @include('metro.layout._scrolltop')
    <!--end::Scrolltop-->


    <!--begin::Modals-->
    @yield('modals')
    <!--end::Modals-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "/assets";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
    <script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    @yield('page-vendor-scripts')
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    @yield('page-custom-scripts')
    <!--end::Page Custom Javascript-->
    @yield('scripts')
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
