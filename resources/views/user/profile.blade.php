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
@if(Auth::user()->admin)
    administrateur
@else
    client
@endif
