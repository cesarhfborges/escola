<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="cache-control" content="public">
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="expires" content="Mon, 27 sep 2019 11:12:01 GMT" />
    <meta http-equiv="imagetoolbar" content="no" />
    <meta name="generator" content="Laravel 5.8" />
    <meta name="revisit-after" content="1 days" />
    <meta name="rating" content="general" />

    <meta name="googlebot" content="noarchive">
    <meta name="google-site-verification" content="{{ env('GOOGLE_SITE_VERIFICATION') }}"/>

    {{--  SEO  --}}
    <meta http-equiv="content-language" content="{{ env('CONTENT_LANGUAGE') }}" />
    <meta name="copyright" content="{{ env('SITE_COPYRIGHT') }}" />
    <meta name="description" content="{{ env('SITE_DESCRIPTION') }}" />
    <link rel="canonical" href="http://{{ url('/') }}">
    <meta name="keywords" content="sdredes, sdredes escola, sdredes certificacao, sdredes sophos, sdredes brasilia, sdredes seguranca, sdredes ti, sdredes sdacademy, sdacademy">
    <meta itemprop="name" content="SdAcademy Certificações Redes, Firewall.">
    <meta itemprop="image" content="http://sdacademy.sdredes.info/public/uploads/settings/DsYHVCdPAIAvepw.png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
{{--    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">--}}
    <!-- CSS Files -->
    <link href="{{ asset('assets/css/material-dashboard.css?v=2.1.0') }}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->

    <!-- Quill Js -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/quill/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/quill/dist/quill-emoji.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/quill/quill-autoresize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/notification.css') }}">

    @stack('cssimport')
</head>
<body id="body" class="" style="overflow: hidden;">
<script>
    (function () {
        let body = document.getElementById('body');
        if (localStorage.getItem('menuState') === '1'){
            body.className = 'sidebar-mini';
        }
    })();
</script>
<div class="wrapper ">
    @include('partial.menu')

    <div class="main-panel">
        <!-- Navbar -->
        @include('partial.navbar')
        <!-- End Navbar -->
        <div class="content m-0 pt-5 mt-3">
            <main>
                @yield('content')
            </main>
        </div>
        @include('partial.footer')
    </div>
</div>
<!--   Core JS Files   -->
<script src="{{ asset('assets/js/core/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/core/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/core/bootstrap-material-design.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
<!-- Plugin for the momentJs  -->
<script src="{{ asset('assets/js/plugins/moment.min.js') }}"></script>
<!--  Plugin for Sweet Alert -->
<script src="{{ asset('assets/js/plugins/sweetalert2.js') }}"></script>
<!-- Forms Validations Plugin -->
<script src="{{ asset('assets/js/plugins/jquery.validate.min.js') }}"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{ asset('assets/js/plugins/jquery.bootstrap-wizard.js') }}"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{ asset('assets/js/plugins/bootstrap-selectpicker.js') }}"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="{{ asset('assets/js/plugins/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datetimepicker-pt-br.js') }}"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
<script src="{{ asset('assets/js/plugins/jquery.dataTables.min.js') }}"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{ asset('assets/js/plugins/bootstrap-tagsinput.js') }}"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ asset('assets/js/plugins/jasny-bootstrap.min.js') }}"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="{{ asset('assets/js/plugins/fullcalendar.min.js') }}"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="{{ asset('assets/js/plugins/jquery-jvectormap.js') }}"></script>
<!-- Input mask Jquery library -->
<script src="{{ asset('assets/js/mask/jquery.mask.min.js') }}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('assets/js/plugins/nouislider.min.js') }}"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="{{ asset('assets/js/plugins/core-js-241.js') }}"></script>
<!-- Library for adding dinamically elements -->
<script src="{{ asset('assets/js/plugins/arrive.min.js') }}"></script>
<!--  Google Maps Plugin    -->
{{--<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>--}}
<!-- Chartist JS -->
<script src="{{ asset('assets/js/plugins/chartist.min.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('assets/js/plugins/bootstrap-notify.js') }}"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('assets/js/material-dashboard.js?v=2.1.0') }}" type="text/javascript"></script>

<!-- Quill Js -->
<script src="{{ asset('assets/quill/quill.min.js') }}"></script>
<script src="{{ asset('assets/quill/dist/quill-emoji.js') }}"></script>
<script src="{{ asset('assets/quill/image-resize.min.js') }}"></script>
<script src="{{ asset('assets/js/notification.js') }}"></script>

{{--scripts uteis em todo o projeto--}}
<script src="{{ asset('pages/util/util.js') }}"></script>

@stack('jsimport')
@include('notifications.flash-message')

</body>

</html>
