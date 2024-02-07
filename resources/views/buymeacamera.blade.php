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
    {{-- <link rel="stylesheet" href="{{ asset('style/css.css') }}"> --}}
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

    </style>
</head>
<body>
    <div class="container camerssectioncontainer">
        <div class="bfirst-frame">
            <div class="bnav-bar">
                <div class="bnav">
                    <a href="/">Home</a>
                    <a href="/milap">Secret</a>
                    <a href="https://forms.gle/kiDWfUruyA4aa5dH6">My projects</a>
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
