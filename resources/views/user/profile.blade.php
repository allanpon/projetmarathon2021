@include('layouts.app')
<img src="{{Auth::user()->avatar}}" alt="avatar">
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

        <x-comment :c="$c"></x-comment>

    @endforeach
@else
    client
@endif
