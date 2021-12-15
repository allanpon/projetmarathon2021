<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Détail Série ID {{$serie->id}}</title>
</head>
<body>
@include('layouts.app')
<br>
id: {{ $serie->id}}<br><br>
nom: {{ $serie->nom}}<br><br>
genre: {{ $serie->genre}}<br><br>
langue: {{ $serie->langue}}<br><br>
date de sortie: {{ $serie->premiere}}<br><br>
avis: {{ $serie->avis}}<br><br>
episode: {{ $serie->nbEpisodes()}}<br><br>
saison: {{ $serie->nbSaisons()}}<br><br>

@yield('scripts')
</body>
</html>
