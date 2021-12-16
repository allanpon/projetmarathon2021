<!doctype html>
<html lang="fr">
<title>Détail Série ID {{ $serie->id}}</title>
@include('layouts.app')
<body>
<br>
id: {{ $serie->id}}<br><br>
nom: {{ $serie->nom}}<br><br>
genre: {{ $serie->genre}}<br><br>
langue: {{ $serie->langue}}<br><br>
date de sortie: {{ $serie->premiere}}<br><br>
avis: {{ $serie->avis}}<br><br>
nombre d'episodes: {{ $serie->nbEpisodes()}}<br><br>
episodes: <br>
@foreach($episodes as $episode)
    <ul>
        <li>Episode {{$episode->numero}}, Saison {{$episode->saison}}: {{$episode->nom}}</li>
        {!! $episode->resume !!}
        {{ $episode->duree }} minutes
    </ul>
@endforeach
nombre de saisons: {{ $serie->nbSaisons()}}<br><br>
commentaires: <br>
@foreach($commentaires as $commentaire)
    ID de l'utilisateur: {!! $commentaire->id !!} <br>
    Créé le: {!! $commentaire->created_at !!}
    {!! $commentaire->content !!} <br><br>
@endforeach
@yield('scripts')
</body>
</html>
