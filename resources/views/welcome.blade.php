@extends('layouts.app')

@section('content')
    <div class="caroussel">

    </div>


    @foreach($data as $serie)
        <x-seriecard :serie="$serie"></x-seriecard>
    @endforeach
@endsection
