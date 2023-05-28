<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc." />

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('template/assets/fonts/feather/feather.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/assets/libs/flatpickr/dist/flatpickr.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/assets/libs/quill/dist/quill.core.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/assets/libs/highlightjs/styles/vs2015.css') }}" />

    <!-- Theme CSS -->

    <link rel="stylesheet" href="{{ asset('template/assets/css/theme.min.css') }}" id="stylesheetLight">
    <link rel="stylesheet" href="{{ asset('template/assets/css/theme-dark.min.css') }}" id="stylesheetDark">

    <style>
        body {
            display: none;
        }
    </style>

    <!-- Title -->
    <title>@yield('title') | Pelindo </title>

    <!-- Global site tag (gtag.js')}}) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156446909-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());
        gtag("config", "UA-156446909-1");
    </script>

</head>

<body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary">

    <!-- CONTENT
    ================================================== -->
    @yield('content')



    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="{{ asset('template/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('template/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/assets/libs/%40shopify/draggable/lib/es5/draggable.bundle.legacy.js') }}"></script>
    <script src="{{ asset('template/assets/libs/autosize/dist/autosize.min.js') }}"></script>
    <script src="{{ asset('template/assets/libs/chart.js') }}/dist/Chart.min.js')}}"></script>
    <script src="{{ asset('template/assets/libs/dropzone/dist/min/dropzone.min.js') }}"></script>
    <script src="{{ asset('template/assets/libs/flatpickr/dist/flatpickr.min.js') }}"></script>
    <script src="{{ asset('template/assets/libs/highlightjs/highlight.pack.min.js') }}"></script>
    <script src="{{ asset('template/assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('template/assets/libs/list.js') }}/dist/list.min.js')}}"></script>
    <script src="{{ asset('template/assets/libs/quill/dist/quill.min.js') }}"></script>
    <script src="{{ asset('template/assets/libs/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('template/assets/libs/chart.js') }}/Chart.extension.js')}}"></script>

    <!-- Theme JS -->
    <script src="{{ asset('template/assets/js/theme.min.js') }}"></script>


</body>

</html>
