<!doctype html>
<html lang="fr">
<link rel="stylesheet" href="css/style.css">
<title>Détail Série ID {{ $serie->id}}</title>
@include('layouts.app')
<body>
<div class="detail">
    <img src='/{{$serie->urlImage}}'>
    {{$serie->nom}}
    Genre: {{ $serie->genre}}
    Langue: {{ $serie->langue}}
    Date de sortie: {{ $serie->premiere}}
    Avis: {{ $serie->avis}}
    Nombre d'episodes: {{ $serie->nbEpisodes()}}
    Nombre de saisons: {{ $serie->nbSaisons()}}
</div>
Resume: {!! $serie->resume !!}
Commentaires: <br>
@foreach($commentaires as $commentaire)
    <x-comment :com="$commentaire"></x-comment><br><br>
@endforeach
episodes: <br>
@foreach($episodes as $episode)
    <x-episode :ep="$episode"></x-episode><br><br>
@endforeach
@yield('scripts')
</body>
</html>
