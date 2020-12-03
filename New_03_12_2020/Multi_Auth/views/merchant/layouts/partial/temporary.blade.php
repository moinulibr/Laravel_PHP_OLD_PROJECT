<!doctype html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name',HS_APP_NAME) }} {{-- env('APP_NAME') --}} - @stack('head_title')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('backend/links')}}/{{HS_HEAD_TITLE_LOGO}}"/>

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('backend/links')}}/vendors/bundle.css" type="text/css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;500;600&amp;display=swap" rel="stylesheet">

    <!-- Slick -->
    <link rel="stylesheet" href="{{asset('backend/links')}}/vendors/slick/slick.css" type="text/css">
    <link rel="stylesheet" href="{{asset('backend/links')}}/vendors/slick/slick-theme.css" type="text/css">

    <!-- Daterangepicker -->
    <link rel="stylesheet" href="{{asset('backend/links')}}/vendors/datepicker/daterangepicker.css" type="text/css">

    <!-- DataTable -->
    <link rel="stylesheet" href="{{asset('backend/links')}}/vendors/dataTable/datatables.min.css" type="text/css">

    <!-- App css -->
    <link rel="stylesheet" href="{{asset('backend/links')}}/assets/css/app.min.css" type="text/css">

    <!--[if lt IE 9]-->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!--[endif]-->

    <style>
        .activeParent{
            color:#282875 !important;
            font-weight: 900;
        }
    </style>

    @stack('extra-css')
</head>
<body>
    <!-- Preloader -->
    @if(HS_PRELOADER_ACTIVATION)
    <div class="preloader">
        <img class="logo" src="{{asset('backend/links')}}/{{HS_PRELOADER_LOGO}}" alt="logo">
        <img class="dark-logo" src="{{asset('backend/links')}}/{{HS_PRELOADER_IMAGE}}" alt="logo dark">
        <div class="preloader-icon"></div>
    </div>
    @endif
    <!-- ./ Preloader -->


    <!-- Layout wrapper -->
    <div class="layout-wrapper">
        <!-- Header -->
        @include('backend.merchant.layouts.partial.header_with_top_right')
        <!-- ./ Header -->

        <!-- Content wrapper -->
        <div class="content-wrapper">

            <!---------left_side_bar-------->
                @include('backend.merchant.layouts.partial.left_side_bar')
            <!---------left_side_bar-------->

            <!-- Content body -->
            <div class="content-body">
                <!-- Content start-->
                <div class="content">
                    <!--===============================================================================--->
                    @yield('content')
                    <!--===============================================================================--->
                </div>
                <!-- ./ Content End-->



                <!-- Footer -->
                @include('backend.merchant.layouts.partial.footer')
                <!-- ./ Footer -->
            </div>
            <!-- ./ Content body -->
        </div>
        <!-- ./ Content wrapper -->
    </div>
    <!-- ./ Layout wrapper -->


    @stack('extra-js')
    <!-- Main scripts -->
    <script src="{{asset('backend/links')}}/vendors/bundle.js"></script>
    <!-- App scripts -->
    <script src="{{asset('backend/links')}}/assets/js/app.min.js"></script>
    <!-- Apex chart -->
    <script src="{{asset('backend/links')}}/../apexcharts.com/samples/assets/irregular-data-series.js"></script>
    <script src="{{asset('backend/links')}}/vendors/charts/apex/apexcharts.min.js"></script>

    <!-- Daterangepicker -->
    <script src="{{asset('backend/links')}}/vendors/datepicker/daterangepicker.js"></script>

    <!-- DataTable -->
    <script src="{{asset('backend/links')}}/vendors/dataTable/datatables.min.js"></script>

    <!-- Dashboard scripts -->
    <script src="{{asset('backend/links')}}/assets/js/examples/pages/ecommerce-dashboard.js"></script>


    <!-- Sweet alert -->
    <script src="{{asset('backend/links')}}/assets/js/examples/sweet-alert.js"></script>
    <!-- Toast examples -->
    <script src="{{asset('backend/links')}}/assets/js/examples/toast.js"></script>

</body>
</html>






















{{--
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
 --}}
