<!doctype html>
<html lang="fr">

<link rel="stylesheet" href="{{asset('css/style-detail.css')}}">

<title>Détail de {{ $serie->nom}}</title>
@include('layouts.navbar')
<body>
<div class="detailetimage">
    <img src='{{asset($serie->urlImage)}}'>
    <div class="detail">
        <h1>{{$serie->nom}}</h1><br>
        {{ $serie->note }}/10<br>
        {{ $serie->genre}}<br>
        {{ $serie->langue}}<br>
        {{ $serie->premiere}}<br>
        {{ $serie->nbEpisodes()}} épisodes<br>
        {{ $serie->nbSaisons()}} saisons<br>
            Avis: {{ $serie->avis}}
    </div>
</div>

<h2>Resume</h2>
{!! $serie->resume !!}

<h2>Commentaires</h2>
@foreach($commentaires as $commentaire)
    <x-comment :com="$commentaire"></x-comment><br><br>
@endforeach

<h2>Episodes</h2>
@foreach($episodes as $episode)
    <x-episode :ep="$episode"></x-episode><br><br>
@endforeach
@yield('scripts')
</body>
</html>
