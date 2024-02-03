@extends('layouts.app')

@section('content')
<div class="container account-container">
    {{-- <div class="row justify-content-center">
        {{-- <div class="col-md-12">
            <div class="col-md-4">
                <h1>some</h1>
            </div>
            <div class="col-md-4">
                <h1>one</h1>
            </div>
            <div class="col-md-4">
                <h1>thing</h1>
            </div>
            {{-- <div class="card">
                <div class="card-header">{{ __('milapboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> --}}
        {{-- </div> --}}
    {{-- </div> --}}
    <div class="account-cont">
        <div class="child4">
           <div class="video">
            {{-- <video autoplay class="acc-vid">
                <source src="{{ asset('vid/video-1648198471.mp4') }}" type="video/mp4">
            </video> --}}
            <video autoplay class="acc-vid" loop>
                <source src="{{ asset('vid/video-1648198471.mp4') }}" type="video/mp4">
            </video>
           </div>
        </div>
        <div class="child4 something">
            <div class="sub-child">
                <div class="acc-img">
                    <img class="acc-subimg" src="{{ asset('images/280291421_998785714165966_4108777435658327961_n.jpg') }}" alt="">
                </div>
            </div>
            <div class="sub-child">
                <div class="acc-">
                    <img class="acc-subimg2" src="{{ asset('images/275971910_335421931888845_3320924835783921838_n.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
