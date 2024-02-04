@extends('templates')
@section('title')
    Home
@endsection
@section('content')
<div class="home-content">
    <div class="child home-texts">
        <h1 class="name">MisTor Milap. <span class="namespan">de assay</span></h1>
        <p class="home-paragraph">
            As my name suggest's i'm Mistor milap, i'm also known as de chapri or aka de assay.
            My friends gave me a nickname i.e assay, feel free to call me whatever you like.
            Looking at the picture at right, you may think i'm not black that's only filter but
            let me correct you i'm black (negro).

        </p>
        <div class="space"></div>
        <p class="home-secondparagraph">
            Though I'm a student of IT studying on some expensive university, my whole foucs is on the camera.
            Recently I bought an expensive camera (as i study in expensive university). I also have a one-plus or 1+
            premium mobile phone.
        </p>
    </div>
    <div class="child assay-img">
        <div class="homelogo-img">
            <img class="milap" src="{{ asset('images/milap1.jpg') }}" alt="">
        </div>
    </div>
    <div class="invis-par">
        <div class="invis-child">
            <img class="invis-assay" src="{{ asset('images/milap1.jpg') }}" alt="">
        </div>
        <div class="invis-child">
            <h1 class="invis-name">MisTor Milap. <span class="invis-namespan">de assay</span></h1>
            <p class="invis-home-paragraph">
                As my name suggest's i'm Mistor milap, i'm also known as de chapri or aka de assay.
                My friends gave me a nickname i.e assay, feel free to call me whatever you like.
                Looking at the picture above, you may think i'm not black that's only filter but
                let me correct you i'm black (negro).

            </p>
            {{-- <div class="invis-space"></div> --}}
            <p class="invis-home-secondparagraph">
                Though I'm a student of IT studying on some expensive university, my whole foucs is on the camera.
                Recently I bought an expensive camera (as i study in expensive university). I also have a one-plus or 1+
                premium mobile phone.
            </p>
        </div>
    </div>
</div>
<div class="second-content">
    <div class="child2">
       <div class="images-div">
            <div class="second-image">
                <img class="moonimg" src="{{ asset('images/WhatsApp Image 2024-02-02 at 16.39.27_12231cce.jpg') }}" alt="">
            </div>
       </div>
    </div>
    <div class="child2">
        <h1 class="sname">
            De Moon
        </h1>
        <p class="home-paragraphs">
            I've mentione above that, currently my whole focus is on photography and this
            is the picture of moon that i took a year or two ago.<br>
            I'm NIGLAP so i love black things, and the sky look's black so I took it.
        </p>
        <div class="space"></div>
        <p class="home-secondparagraphs">
            This image was taken to remind me that I could not step on the moon, it was impossible.
            The only thing i could do was to take this picture.
        </p>
    </div>
    <div class="invis-par2">
        <div class="invis-child2">
            <img class="invis-assay invis-moon" src="{{ asset('images/WhatsApp Image 2024-02-02 at 16.39.27_12231cce.jpg') }}" alt="">
        </div>
        <div class="invis-child2">
            <h1 class="invis-name">
                De Moon
            </h1>
            <p class="invis-home-paragraph">
                I've mentione above that, currently my whole focus is on photography and this
                is the picture of moon that i took a year or two ago.<br>
                I'm NIGLAP so i love black things, and the sky look's black so I took it.
            </p>
            {{-- <div class="space"></div> --}}
            <p class="invis-home-secondparagraph">
                This image was taken to remind me that I could not step on the moon, it was impossible.
                The only thing i could do was to take this picture.
            </p>
        </div>
    </div>
</div>
<div class="third-content">
    <div class="child3">
        <h1 class="sname">
            My Death
        </h1>
        <p class="home-paragraphs">
            I've faked my own death, as you can conclude it by seeing the picture at right.
            Yeah, that's me actually i'm black but because of the lights I don't really look that black, do I.
            That's not a coffin, That is actually my friend's bed. You can see those clothes piled up.
        </p>
        {{-- <p class="home-secondparagraphs"> --}}

        {{-- </p> --}}
    </div>
    <div class="child3">
        <div class="third-image">
            <img class="thirdimg" src="{{ asset('images/276294905_331326932182255_5004960758496873336_n.jpg') }}" alt="">
        </div>
    </div>
    <div class="invis-par3">
        <div class="invis-child3">
            <img src="{{ asset('images/276294905_331326932182255_5004960758496873336_n.jpg') }}" alt="" class="invis-condolense">
        </div>
        <div class="invis-child3">
            <h1 class="invis-name">
                My Death
            </h1>
            <p class="invis-home-paragraph">
                I've faked my own death, as you can conclude it by seeing the picture above.
                Yeah, that's me actually i'm black but because of the lights I don't really look that black, do I.
                That's not a coffin, That is actually my friend's bed. You can see those clothes piled up.
            </p>
        </div>
    </div>
</div>
<div class="footer">
    <div class="innerfooter">
        <div class="child5 pre-footer">
            <h1 class="footerhead">
                About me
            </h1>
            <div class="space above-footer"></div>
            <p class="footer-par">
                Nah, there is nothing left for you to know about me. But if you want to know me personally here's my facebook username:"MisTor Milap" & and my instagram="m.milap". Ah, an extra bit of information recently I took
                a "PHOTO" of Dharan clocktower, you can see that in my instagram account. And lastly, all I want to say is "25" in nepali. NIGLAP
            </p>
            <p class="signature">
              <span class="sig"> Developed by: </span> ゆわる / ユワル
            </p>
        </div>
        {{-- <div class="child5">
            <div class="footer-child-img">
                {{-- <img class="footer-sub-image" src="{{ asset('images/276294907_1128842917949128_7804443759852686452_n.png') }}" alt=""> --}}
            {{-- </div> --}}
        {{-- </div> --}}
    </div>
</div>
@endsection

