<!DOCTYPE html>
<!-- <html lang="en"> -->
<html lang="en">
<!--begin::Head-->

<head>

    <base href="">
    <title>@yield('title','ecom')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
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
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <style>
        #hello-user{
            display:none;
        }
        @media(min-width: 992px){
        #hello-user{
            display:inherit;
        }}
    </style>
    @yield('style')
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="page-loading-enabled page-loading header-fixed header-tablet-and-mobile-fixed aside-enabled aside-fixed bg-light-dark"
    style="">


    <!--begin::loader-->
    @include('app.project.layout._loader')
    <!--end::loader-->

    <!--begin::Master content-->
    @include('app.project.layout.master')
    <!--end::Master content-->

    <!--begin::scrollto the top-->
    @include('app.project.layout._scrolltop')
    <!--end::scrollto the top-->

    <!--begin::Modals-->
    @yield('modals')
    <!--end::Modals-->

    <!--begin::Javascript-->
    <script>
        var hostUrl = "localhost:8000";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    @yield('page-vendor-script')
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    @yield('page-custom-script')
    <!--end::Page Custom Javascript-->
    @yield('scripts')
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
