{{-- @extends('templates')
@section('title')
    Buy
@endsection

@section('content')
    <div class="buy-container">
        <div class="buymaincontent">
            <h1 class="camera-h1">Wah you wanna buy me a camera?</h1>
            <div class="space"></div>
            <span class="buyername">
                May I know you'r name?
            </span>
            <table>
                <tr>
                    <form action="" method="get">Name</form>
                </tr>
            </table>
            <div class="space"></div>
            <ul class="camera-list">
                <a class="buylink" href="https://www.amazon.com/Canon-Mark-DSLR-Camera-24-105mm/dp/B071K62DZT/ref=sr_1_10?crid=35383KSEVTS29&keywords=Dslr&qid=1706799156&sprefix=dsl%2Caps%2C1149&sr=8-10"><li>Buy me the Expensive</li></a>
                <div class="small-space"></div>
                <a class="buylink" href="https://www.amazon.com/Canon-Digital-Camera-18-135-Lens/dp/B07WHV3HXL/ref=sr_1_5?crid=35383KSEVTS29&keywords=Dslr&qid=1706799156&sprefix=dsl%2Caps%2C1149&sr=8-5"><li>Buy me the cheapest</li></a>
            </ul>

        </div>
    </div>
@endsection --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NigMilap | Buy</title>
    <link rel="stylesheet" href="{{ asset('style/css.css') }}">
</head>
<body>
    <div class="container">
        <div class="first-frame">
            <div class="bnav-bar">
                <div class="bnav">
                    <a href="/">Home</a>
                    <a href="{{ route('login') }}">Secret</a>
                    <a href="">My projects</a>
                    <a href="/buy">Buy me a camera</a>
                </div>
            </div>
            {{-- @yield('content') --}}
            <div class="buy-container">
                <div class="buymaincontent">
                    <h1 class="camera-h1">Wah you wanna buy me a camera?</h1>
                    <div class="space"></div>
                    {{-- <span class="buyername">
                        May I know you'r name?
                    </span>
                    <table>
                        <tr>
                            <form action="" method="get">Name</form>
                        </tr>
                    </table> --}}
                    <div class="space"></div>
                    <ul class="camera-list">
                        <a class="buylink" href="https://www.amazon.com/Canon-Mark-DSLR-Camera-24-105mm/dp/B071K62DZT/ref=sr_1_10?crid=35383KSEVTS29&keywords=Dslr&qid=1706799156&sprefix=dsl%2Caps%2C1149&sr=8-10"><li>Buy me the Expensive</li></a>
                        <div class="small-space"></div>
                        <a class="buylink" href="https://www.amazon.com/Canon-Digital-Camera-18-135-Lens/dp/B07WHV3HXL/ref=sr_1_5?crid=35383KSEVTS29&keywords=Dslr&qid=1706799156&sprefix=dsl%2Caps%2C1149&sr=8-5"><li>Buy me the cheapest</li></a>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</body>
</html>
