@extends('layouts.app')

<link rel="stylesheet" href="css/style.css">

@section('content')Z
    <div class="swiper">
        <div class="swiper-wrapper">
@foreach($data as $serie)
            <div class="swiper-slide slide">
                <img src="{{$serie->urlImage}}" style="">
                <div class="text">{{$serie->nom}}</div>
            </div>
@endforeach
        </div>


        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>


    </div>

    <script src="{{asset('js/slideshow.js')}}"></script>




@endsection
