<!doctype html>
<html lang="fr">
<header>
    <link rel="stylesheet" href="css/style-liste.css">
    @include('layouts.navbar')
</header>

<title>Liste des séries</title>

<body>


    @if(count($data) ==0)
        <h1>Pas de résultat</h1>
    @else
        <div id="series">
            @foreach($data as $serie)
                <div class="example">
                    <img src="{{asset($serie->urlImage)}}">
                    <a href="{{route('series.show',$serie->id)}}">
                        <div class="content">1
                            <div class="text">
                                Genre: {{$serie->genre}}<br>
                                Langue: {{$serie->langue}}<br>
                                Nombre de saisons: {{$serie->nbSaisons()}}
                            </div>
                        </div>
                    </a>
                    {{ \Illuminate\Support\Str::limit($serie->nom, 21, $end='...') }}
                </div>
            @endforeach
        </div>
    @endif

</body>

</html>