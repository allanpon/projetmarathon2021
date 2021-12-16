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
    ID de l'utilisateur: {!! $commentaire->id !!} <br>
    Créé le: {!! $commentaire->created_at !!}
    {!! $commentaire->content !!} <br><br>
@endforeach
episodes: <br>
@foreach($episodes as $episode)
    <ul>
        <li>Episode {{$episode->numero}}, Saison {{$episode->saison}}: {{$episode->nom}}</li>
        {!! $episode->resume !!}
        {{ $episode->duree }} minutes
    </ul>
@endforeach
@yield('scripts')
</body>
</html>
