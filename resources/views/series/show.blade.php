<!doctype html>
<html lang="fr">
<title>Détail Série ID {{ $serie->id}}</title>
@include('layouts.navbar')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<body>
<br>
id: {{ $serie->id}}<br><br>
nom: {{ $serie->nom}}<br><br>
genre: {{ $serie->genre}}<br><br>
langue: {{ $serie->langue}}<br><br>
date de sortie: {{ $serie->premiere}}<br><br>
nombre d'episodes: {{ $serie->nbEpisodes()}}<br><br>
nombre de saisons: {{ $serie->nbSaisons()}}<br><br>
episodes: <br>
@foreach($episodes as $episode)
    <x-episode :ep="$episode"></x-episode>
@endforeach
commentaires: <br><br>
@foreach($commentaires as $commentaire)
    <x-comment :com="$commentaire"></x-comment><br>
@endforeach
@yield('scripts')
</body>
</html>
