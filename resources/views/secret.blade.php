<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Milap | secret</title>
    {{-- <link rel="stylesheet" href="{{ asset('style/style.css') }}"> --}}
    <style>
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
        .parent
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
        .child-parent
        {
            display: grid;
            grid-template-rows: 1fr 1fr;
            /* grid-gap: 20px; */
            /* border: 1px solid black; */
            width: 100%;
        }
        .sub-child
        {
            margin: 20px 10px 10px;
            height: 30vh;
            /* border: 1px solid red; */
        }
        .vid-div
        {
            width: 70%;
            height: 70vh;
            margin: 20px 15%;
            /* background: violet; */
        }
        .sec-vid
        {
            width: 100%;
            height: 80vh;
        }
        .first-im
        {
            width: 70%;
            height: 30vh;
            margin: 0 15%;
            /* background: violet; */
        }
        .sub-img
        {
            width: 100%;
        }
        .sec-img
        {
            width: 100%;
            height: 40vh;
        }
        .video
        {
            width: 100%;
            height: 100vh;
            /* background: violet; */
        }
        .ohyeah
        {
            width: 100%;
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
        .seclink
        {
            text-decoration: none;
            font-family: 'Allerta Stencil', sans-serif;
            color: rgb(23, 22, 22);
            /* transform: scaleX(10);
            transition: transform 0.3s ease-in-out; */
        }

        .link
        {
            margin-top: -10px;
            width: 100%;
            background: #000;
        }

        @media only screen and (width < 600px)
        {
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
            .video
            {
                background: black;
            }
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
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="first-frame">
            <div class="nav-bar">
                <div class="nav">
                    <a href="/">Home</a>
                    <a href="/milap">Milap</a>
                    <a href="https://forms.gle/kiDWfUruyA4aa5dH6">My projects</a>
                    <a href="/buy">Buy me a camera</a>
                </div>
            </div>
            <div class="parent">
                <div class="child">
                    <div class="vid-div">
                        <video autoplay class="sec-vid" loop>
                            <source src="{{ asset('vid/video-1648198471.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="child-parent">
                    <div class="sub-child">
                        <div class="first-im">
                            <img class="sub-img" src="{{ asset("images/280291421_998785714165966_4108777435658327961_n.jpg") }}" alt="">
                        </div>
                    </div>
                    <div class="sub-child">
                        <div class="first-im">
                          <img class="sec-img" src="{{ asset('images/275971910_335421931888845_3320924835783921838_n.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>

