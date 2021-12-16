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
    </div>
</div>

<h2>Resume</h2>
{!! $serie->resume !!}

<h2>Commentaires</h2>
@auth()
 <form action="{{route('comment.creer',[Auth::id(),$serie->id])}}" method="POST">
    {!! csrf_field() !!}
    <div class="text-center" style="margin-top: 2rem">
        <h5>Laisser un commentaire</h5>
        <hr class="mt-2 mb-2">
    </div>
    <div>
        <label for="autonomie"><strong>Note (entre 0 et 5):</strong></label>
        <input type="number" name="note" id="note"
               value="{{ old('note') }}"
               placeholder="1 - 5">
    </div>
    <div>
        <label for="textarea-input"><strong>Commentaire :</strong></label>
        <textarea name="comment" id="comment" rows="6" class="form-control" cols="20"
                  placeholder="Commentaire">{{ old('comment') }}</textarea>
    </div>
    <div>
        <button class="btn btn-success" type="submit">Valide</button>
    </div>

</form>
@endauth
@foreach($commentaires as $commentaire)
    <x-comment :com="$commentaire"></x-comment><br><br>
@endforeach

<h2>Avis</h2>
{{ $serie->avis}}

<h2>Episodes</h2>
@foreach($episodes as $episode)
    <x-episode :ep="$episode"></x-episode><br><br>
@endforeach
@yield('scripts')
</body>
</html>
