<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NigMilap | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('style/css.css') }}">
</head>
<body>
    <div class="container">
        <div class="first-frame">
            <div class="nav-bar">
                <div class="nav">
                    <a href="/">Home</a>
                    <a href="{{ route('login') }}">Secret</a>
                    <a href="">My projects</a>
                    <a href="/buy">Buy me a camera</a>
                </div>
            </div>
            @yield('content')
        </div>
    </div>
</body>
</html>
