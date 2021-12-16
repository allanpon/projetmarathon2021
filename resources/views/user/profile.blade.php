<!doctype html>
<html lang="fr">
<title>{{Auth::user()->name}}</title>
<?php
$seen=DB::select('SELECT episodes.* FROM episodes inner join seen on(episodes.id=seen.episode_id) inner join users on(seen.user_id=users.id)where users.id=?  ORDER BY serie_id',[Auth::id()]);
?>
@include("layouts.navbar")
<body>
<img src="{{asset(Auth::user()->avatar)}}" alt="avatar">
<br>
Bonjour {{ Auth::user()->name }}
<br>
<br>
email: {{Auth::user()->email}}
<br>
<br>
statut:
@if(Auth::user()->administrateur)
    administrateur
    <br>
    <br>
    commentaire en attente de validation: <br><br>
    @foreach($com as $c)
        <x-comment :com="$c"></x-comment>
    @endforeach
@else
    client
@endif
<br>
episode visionnés:
<br>
<p></p>
@foreach($seen as $ep)
    <x-episode :ep="$ep"></x-episode><br>
@endforeach
</body>
</html>