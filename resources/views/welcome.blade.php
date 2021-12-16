@extends('layouts.app')

<link rel="stylesheet" href="css/style.css">

@section('content')
    <div class="swiper">
        <div class="swiper-wrapper">
@foreach($data5 as $serie)
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

    <div class="troisserierandom">
        @foreach($data3 as $serie)
            <img src='{{$serie->urlImage}}'>
        <div class="under">
            <h1>{{$serie->nom}}</h1>
            <?php
            $in = $serie->resume;
            $out = strlen($in) > 360 ? mb_substr($in,0,360)."..." : $in;
            echo $out;
            ?>
        </div>
        @endforeach
    </div>

    <a href="/series" class="button-series" role="button">VOIR TOUTES LES SÉRIES</a>

    <script src="{{asset('js/slideshow.js')}}"></script>
@endsection
