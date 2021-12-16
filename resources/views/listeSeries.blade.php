<!doctype html>
<html lang="fr">
<header>
    <link rel="stylesheet" href="css/style-liste.css">
    @include('layouts.navbar')
</header>


<body>

    Bonjour et bienvenue sur la liste des série !<br>

    @if(count($data) ==0)
        <h1>Pas de résultat</h1>
    @else
        <div id="series">
            @foreach($data as $serie)
                <div class="example">
                    <img src="/{{$serie->urlImage}}">
                    <a href="/series/{{$serie->id}}">
                        <div class="content">
                            <div class="text">
                                Genre :{{$serie->genre}}<br>
                                Langue :{{$serie->langue}}<br>
                                Nombre de saisons :{{$serie->nbSaisons()}}
                            </div>
                        </div>
                    </a>
                    {{$serie->nom}}
                </div>
            @endforeach
        </div>
    @endif

</body>

</html>