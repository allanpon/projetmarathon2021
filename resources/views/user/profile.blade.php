<!doctype html>
<html lang="fr">

<link rel="stylesheet" href="css/style-profil.css">

<title>{{Auth::user()->name}}</title>
<?php
$seen=DB::select('SELECT episodes.* FROM episodes inner join seen on(episodes.id=seen.episode_id) inner join users on(seen.user_id=users.id)where users.id=?  ORDER BY serie_id',[Auth::id()]);
?>
@include("layouts.navbar")
<body>
<h1>Profil</h1>
<div class="horizontal">
    <div class="vertical1">
<img src="{{asset(Auth::user()->avatar)}}" alt="avatar">
    </div>
    <div class="vertical2">
    {{ Auth::user()->name }}
    </div>
</div>
<h1>Description</h1>
<h2>E-mail</h2>
{{Auth::user()->email}}
<h2>Statut</h2>
@if(Auth::user()->administrateur)
    Administrateur
    <h2>Commentaire en attente de validation</h2>
    @foreach($com as $c)
        <x-comment :com="$c"></x-comment>
    @endforeach
@else
    client
@endif
<br>
<h2>Épisode visionnés</h2>
<br>
<p></p>
@foreach($seen as $ep)
    <x-episode :ep="$ep"></x-episode><br>
@endforeach
</body>
</html>