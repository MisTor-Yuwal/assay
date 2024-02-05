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
    {{-- <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('style/secret.css') }}"> --}}

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
                    /* @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
            */
            @import url('https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap');
            *
            {
                margin: 0;
                border: 0;
                padding: 0;
                box-sizing: border-box;
            }

            .container
            {
                width: 100%;
                height: 100vh;
                background: #ffffff;
            }

            .first-frame
            {
                width: 100%;
                height: 100vh;
                background: #d9d9d9;
                border-radius: 45px;
            }

            .nav-bar
            {
                width: 100%;
                /* margin: 0 5%; */
                background: transparent;
                height: 5vh;
                /* background: red; */
            }

            .nav
            {
                width: 40%;
                height: 5vh;
                display: flex;
                justify-content: space-between;
                /* background: black; */
                padding: 10px 50px;
                margin-left: 10px;
            }

            /* .nav > a
            {
                display: inline-block;
                position: relative;
                font-size: 16px;
                text-decoration: none;
                font-family: 'Roboto', sans-serif;
                font-weight: 400;
            }
            .nav > a::after
            {
                content: '';
                position: absolute;
                width: 100%;
                transform: scaleX(0);
                height: 2px;
                bottom: 0;
                left: 0;
                background-color: #0087ca;
                transform-origin: bottom right;
                transition: transform 0.25s ease-out;
            }
            .nav > a::after:hover
            {
                transform: scaleX(1);
                transform-origin: bottom left;

            }*/
            .nav > a
            {
                position: relative;
                color: #000;
                /* font-family: 'Roboto', sans-serif; */
                font-family: 'Allerta Stencil', sans-serif;
                font-size: 12px;
                /* padding: 10px 0; */
                text-decoration: none;
            }

            .nav > a:hover
            {
                color: #000;
            }

            .nav > a::before
            {
                content: "";
                position: absolute;
                display: block;
                width: 100%;
                height: 1px;
                bottom: 0;
                left: 0;
                background-color:#000;
                transform: scaleX(0);
                transition: transform 0.3s ease;
            }

            .nav > a:hover::before
            {
                transform: scaleX(1);
            }
            img
            {
                pointer-events: none;
            }
            .home-content
            {
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-gap: 20px;
                /* border: 1px solid black; */
                width: 100%;
            }
            .child
            {
                margin: 20px 10px 10px;
                height: 90vh;
                /* border: 1px solid red; */
            }

            .homelogo-img
            {
                width: 50%;
                height: 70vh;
                margin: 70px 25%;
                background: black;
                border-radius: 10px;
                box-shadow: .5rem 1rem 1rem 0;
            }
            .milap
            {
                width: 100%;
                height: 70vh;
                border-radius: 10px;
            }

            .name
            {
                /* font-family: 'Roboto', sans-serif; */
                font-family: 'Allerta Stencil', sans-serif;
                margin-left: 50px;
                margin-top: 20%;
                border-left: 5px solid red;
                padding-left: 10px;
            }

            .invis-par,.invis-par2,.invis-par3
            {
                display: none;
            }
            .namespan
            {
                font-size: 16px;
            }

            .home-paragraph
            {
                margin-left: 50px;
                margin-top: 50px;
                text-align: left;
                font-size: 16px;
                font-family: 'Allerta Stencil', sans-serif;
            }
            .space
            {
                width: 100%;
                /* background: red; */
                height: 5vh;
            }
            .home-secondparagraph
            {
                font-size: 16px;
                text-align: left;
                margin-left: 50px;
                font-family: 'Allerta Stencil', sans-serif;
            }
            .second-content
            {
                width: 100%;
                height: 70vh;
                background: #d9d9d9;
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-gap: 20px;
                border-top-left-radius: 45px;
                border-top-right-radius: 45px;
                /* border: 1px solid blue; */
            }
            .child2
            {
                margin: 0 10px;
                height: 70vh;
                /* border: 1px solid navy; */
            }
            .second-image
            {
                width: 100%;
                height: 50vh;
                /* margin: 10% 25%; */
                /* background: blue; */
                border-radius: 50px;
            }
            .images-div
            {
                width: 50%;
                height: 51vh;
                background: whitesmoke;
                margin: 10% 25%;
                box-shadow: 0 5px 15px 5px;
            }
            .moonimg{
                width: 100%;
                border-radius: 50px;
            }
            .sname
            {
                font-family: 'Allerta Stencil', sans-serif;
                margin-left: 50px;
                margin-top: 12%;
                border-left: 5px solid red;
                padding-left: 10px;
            }
            .home-paragraphs
            {
                margin-left: 50px;
                margin-top: 50px;
                text-align: left;
                font-size: 16px;
                font-family: 'Allerta Stencil', sans-serif;
            }
            .home-secondparagraphs
            {
                font-size: 16px;
                text-align: left;
                margin-left: 50px;
                font-family: 'Allerta Stencil', sans-serif;
            }
            .third-content
            {
                width: 100%;
                height: 70vh;
                background: #d9d9d9;
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-gap: 20px;
                /* border: 1px solid red; */
            }
            .child3
            {
                margin: 0 10px;
                height: 70vh;
                /* border: 1px solid blue; */
            }
            .third-image
            {
                width: 50%;
                height: 65vh;
                margin: 10px 25%;
                /* background: blue; */
                box-shadow: 0 5px 15px 5px;
                overflow: hidden;
                border-radius: 10px;
            }
            .thirdimg
            {
                width: 100%;
            }
            .footer
            {
                width: 100%;
                height: 30vh;
                /* background: violet; */
            }
            .innerfooter
            {
                width: 80%;
                margin: 0 10%;
                /* background: violet; */
                height: 30vh;
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-gap: 20px;
                /* border: 2px solid red; */
            }
            .child5
            {
                margin: 0 10px;
                /* border: 1px solid blue; */
            }

            .buy-container
            {
                width: 100%;
                height: 95vh;
                /* background: #ffffff; */
                position: fixed;
                background-image: url('../images/wallpaperflare.com_wallpaper\ \(1\).jpg');
                background-repeat: no-repeat;
                background-size: cover;
            }

            .buymaincontent
            {
                width: 30%;
                margin: 4% 35%;
                height: 75vh;
                /* background: #0B0B0D; */
                opacity: .5;
                border-radius: 50px;
                /* border: .5px solid whitesmoke; */
                box-shadow: 5px 5px 10px 5px #d9d9d9;
            }

            .camera-h1
            {
                color: rgb(255, 255, 255);
                font-family: 'Allerta Stencil', sans-serif;
                font-size: 16px;
                text-align: center;
                padding-top: 50px;
            }
            .bnav-bar
            {
                width: 100%;
                /* margin: 0 5%; */
                /* background: transparent; */
                height: 5vh;
                background: black;
            }
            .bnav
            {
                width: 40%;
                height: 5vh;
                display: flex;
                justify-content: space-between;
                /* background: black; */
                padding: 10px 50px;
                margin-left: 10px;
            }
            .bnav > a
            {
                position: relative;
                color: whitesmoke;
                /* font-family: 'Roboto', sans-serif; */
                font-family: 'Allerta Stencil', sans-serif;
                font-size: 12px;
                /* padding: 10px 0; */
                text-decoration: none;
            }

            .bnav > a:hover
            {
                color: whitesmoke;
            }

            .bnav > a::before
            {
                content: "";
                position: absolute;
                display: block;
                width: 100%;
                height: 1px;
                bottom: 0;
                left: 0;
                background-color: whitesmoke;
                transform: scaleX(0);
                transition: transform 0.3s ease;
            }

            .bnav > a:hover::before
            {
                transform: scaleX(1);
            }
            /* .buyername
            {
                color: white;
                font-family: 'Allerta Stencil', sans-serif;
                font-size: 14px;
                margin-left: 110px;
            } */

            .camera-list
            {
                font-family: 'Allerta Stencil', sans-serif;
                font-size: 14px;
                list-style-type: none;
                /* background: violet; */
                width: 40%;
                margin: 150px 120px;
            }
            .small-space
            {
                /* background: violet; */
                height: 10px;
            }
            .camera-list > a
            {
                text-decoration: none;
                color: white;
            }

            .camera-list > a:hover
            {
                color: darkgrey;
                transition: 1s;
            }

            .footerhead
            {
                /* font-family: 'Roboto', sans-serif; */
                font-family: 'Allerta Stencil', sans-serif;
                /* border-left: 5px solid red; */
                font-size: 18px;
            }
            .footer-par
            {
                font-family: 'Allerta Stencil', sans-serif;
                font-size: 14px;
            }
            /* .footer-child-img
            {
                width: 80%;
                height: 50vh;
                margin: 0 10%;
                /* background: red; */
            /* } */
            /* .footer-sub-image
            {
                width: 100%;
                height: 50vh;
            } */
            .signature
            {
                padding: 10px 0;
            }
            .sig
            {
                font-family: 'Allerta Stencil', sans-serif;
                font-size: 16px;
            }

            /* ////////////////////////////////////view ports/////////////// */

            /* @media only screen and (width < 600px)
            {
                .nav-bar
            {
                background: red;
            }
            } */
            @media only screen and (width <600px)
            {
                .nav-bar
                {
                    height: 3vh;
                    /* background: violet; */
                }
                .nav
                {
                    width: 60%;
                    height: 3vh;
                    /* background: red; */
                    margin-left: 80px;
                    padding: 0;

                }
                .nav > a
                {
                    font-size: 8px;
                    margin-top: 8px;
                }
                .first-frame
                {
                    height: 124vh;
                }
                .home-content
                {
                    /* display: grid; */
                    /* grid-template-rows: 1fr 1fr; */
                    /* grid-gap: 20px; */
                    /* border: 10px solid black; */
                    width: 100%;
                    height: 120vh;
                    /* background: blue; */
                }
                .home-paragraph,.home-paragraphs,.home-secondparagraph,.home-secondparagraphs,
                .name,.sname,.home-texts,.assay-img,.child2,.child3,
                .above-footer
                {
                    display: none;
                }
                .invis-par{
                    display: grid;
                    grid-template-rows: 1fr 1fr;
                    grid-gap: 20px;
                    width: 200%;
                    /* border: 1px solid red; */
                }
                .invis-child
                {
                    margin: 20px 10px 10px;
                    /* border: 1px solid black; */
                }
                .invis-assay
                {
                    width: 100%;
                    border-radius: 10px;
                    box-shadow: .5rem 1rem 1rem 0;
                    /* border-top-left-radius: 45px;
                    border-top-right-radius: 45px; */
                }
                .invis-moon
                {
                    border-top-left-radius: 45px;
                    border-top-right-radius: 45px;
                }
                .invis-name
                {
                    font-family: 'Allerta Stencil', sans-serif;
                    /* margin-left: 50px; */
                    border-left: 5px solid red;
                    padding-left: 10px;
                }
                .invis-namespan
                {
                    font-size: 12px;
                }
                .invis-home-paragraph,.invis-home-secondparagraph
                {
                    margin-top: 15px;
                    text-align: left;
                    font-size: 16px;
                    font-family: 'Allerta Stencil', sans-serif;
                }
                .second-content
                {
                    height: 100vh;
                    /* background: green; */
                }
                .invis-par2{
                    display: grid;
                    grid-template-rows: 1fr 1fr;
                    grid-gap: 20px;
                    width: 209%;
                    /* height: 100vh; */
                    /* border: 1px solid red; */
                    /* background: violet; */
                }
                .invis-child2
                {
                    margin: 20px 10px 10px;
                    /* border: 1px solid black; */
                }
                .third-content
                {
                    height: 100vh;
                }
                .invis-par3{
                    display: grid;
                    grid-template-rows: 1fr 1fr;
                    grid-gap: 20px;
                    width: 209%;
                    height: 100vh;
                    /* border: 1px solid red; */
                    /* background: violet; */
                }
                .invis-child3
                {
                    margin: 20px 10px 10px;
                    /* border: 1px solid black; */
                }
                .invis-condolense
                {
                    width: 70%;
                    margin: 0 15%;
                    border-radius: 10px;
                    box-shadow: .5rem 1rem 1rem 0;
                }
                .pre-footer
                {
                    /* margin-top: -10px; */
                    width: 200%;
                }
                .footer-par
                {
                    padding-top: 20px;
                }

                /* /////buy//// */
                .bnav-bar
                {
                    height: 3vh;
                    position: relative;
                    /* background: violet; */
                }
                .bnav
                {
                    width: 60%;
                    height: 3vh;
                    /* background: red; */
                    margin-left: 80px;
                    padding: 0;

                }
                .bnav > a
                {
                    font-size: 8px;
                    margin-top: 8px;
                }
                .camerssectioncontainer
                {
                    /* background: red; */
                    height: 93vh;
                }
                .buymaincontent
                {
                    width: 70%;
                    margin: 15% 15%;
                }
                .camera-h1
                {
                    color: rgb(255, 255, 255);
                    font-family: 'Allerta Stencil', sans-serif;
                    font-size: 12px;
                    text-align: center;
                    padding-top: 50px;
                }
                .camera-list
                {
                    font-family: 'Allerta Stencil', sans-serif;
                    font-size: 14px;
                    list-style-type: none;
                    /* background: violet; */
                    width: 60%;
                    margin: 150px 20%;
                }
            }
                    /* latin */
            @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 400;
            font-stretch: 100%;
            src: url(https://fonts.bunny.net/nunito/files/nunito-latin-400-normal.woff2) format('woff2'), url(https://fonts.bunny.net/nunito/files/nunito-latin-400-normal.woff) format('woff');
            unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0300-0301,U+0303-0304,U+0308-0309,U+0323,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;
            }

            /* cyrillic */
            @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 400;
            font-stretch: 100%;
            src: url(https://fonts.bunny.net/nunito/files/nunito-cyrillic-400-normal.woff2) format('woff2'), url(https://fonts.bunny.net/nunito/files/nunito-cyrillic-400-normal.woff) format('woff');
            unicode-range: U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;
            }

            /* latin-ext */
            @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 400;
            font-stretch: 100%;
            src: url(https://fonts.bunny.net/nunito/files/nunito-latin-ext-400-normal.woff2) format('woff2'), url(https://fonts.bunny.net/nunito/files/nunito-latin-ext-400-normal.woff) format('woff');
            unicode-range: U+0100-02AF,U+0300-0301,U+0303-0304,U+0308-0309,U+0323,U+0329,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;
            }

            /* vietnamese */
            @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 400;
            font-stretch: 100%;
            src: url(https://fonts.bunny.net/nunito/files/nunito-vietnamese-400-normal.woff2) format('woff2'), url(https://fonts.bunny.net/nunito/files/nunito-vietnamese-400-normal.woff) format('woff');
            unicode-range: U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+0300-0301,U+0303-0304,U+0308-0309,U+0323,U+0329,U+1EA0-1EF9,U+20AB;
            }

            /* cyrillic-ext */
            @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 400;
            font-stretch: 100%;
            src: url(https://fonts.bunny.net/nunito/files/nunito-cyrillic-ext-400-normal.woff2) format('woff2'), url(https://fonts.bunny.net/nunito/files/nunito-cyrillic-ext-400-normal.woff) format('woff');
            unicode-range: U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;
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
