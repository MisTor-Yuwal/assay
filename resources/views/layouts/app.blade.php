<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Milap') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    {{-- <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('style/secret.css') }}"> --}}

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        *
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        #app
        {
            width: 100%;
            height: 100vh;
            /* padding-top: 20px; */
            /* background: black; */
            /* background-image: url("../images/280291421_998785714165966_4108777435658327961_n.jpg"); */
            /* background-repeat: no-repeat; */
            /* background-size: cover; */
            /* position: relative; */
        }
        .login-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            /* min-width: 100%; */
            /* min-height: 10%; */
            z-index:-100;
        }
        .login
        {
            background: transparent !important;
        }
        .account-cont
        {
            width: 100%;
            height: 80vh;
            display: grid;
            grid-template-columns: 1fr 1fr;
            /* grid-template-rows: 1fr 1fr 1fr; */
            grid-gap: 20px;
            /* border: 1px solid red; */
        }
        .child4
        {
            margin: 0 10px;
            height: 80vh;
            /* border: 1px solid blue; */
        }
        .something{
            width: 100%;
            height: 60vh;
            display: grid;
            /* grid-template-columns: 1fr 1fr; */
            grid-template-rows: 1fr 1fr;
            grid-gap: 20px;
            /* border: 1px solid black; */
        }
        .sub-child
        {
            margin: 0 10px;
            /* border: 1px solid blue; */
        }
        .video
        {
            width: 70%;
            height: 80vh;
            margin: 0 15%;
            /* background: #000; */
        }
        .acc-vid
        {
            width: 100%;
            height: 80vh;
        }
        .acc-img
        {
            width: 100%;
            height: 50vh;
            /* background: red; */
        }
        .acc-subimg
        {
            width: 100%;
        }
        .acc-subimg2
        {
            width: 40%;
            height: 30vh;
            margin: 0 30%;
        }
        img
        {
            pointer-events: none;
        }

        /* ///////////////////////////////////////////////// */
        @media only screen and (width < 600px)
        {
            .login-header,.login-mail,.login-password
            {
                color: black !important;
            }
        }

    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-transparent shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="color: darkgray;">
                    {{ config('app.name', 'milap') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}" style="color: white;">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" style="color: darkgray;" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
