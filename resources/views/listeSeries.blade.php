<!doctype html>
<html lang="fr">
<link rel="stylesheet" href="css/style-liste.css">
@include("layouts.navbar")
<body>
    @section("content")
    Bonjour et bienvenue sur la liste des série !<br>
    {{--}}<form id="form-search">
        <input type="text" name="recherche"/>
        <input type="submit" value="Envoyez">
        @if(!empty($search))
            <input type="submit" value="Réinitialisez">
        @endif
        <br>
        <label for="genre-select">Choisissez un genre:</label>

        <select name="genre" id="genre-select" onchange="document.querySelector('#form-search').submit();">
            <option value="">--Selectionnez un genre--</option>
            <option value="crime">Crime</option>
            <option value="comedy">Comedy</option>
            <option value="horror">Horror</option>
            <option value="romance">Romance</option>
            <option value="Science-Fiction">S-F</option>
            <option value="fantasy">Fantasy</option>
            <option value="legal">Legal</option>
            <option value="thriller">Thriller</option>
            <option value="history">History</option>
            <option value="mystery">Mystery</option>
            <option value="supernatural">Supernatural</option>
            <option value="western">Western</option>
            <option value="drama">Drama</option>
            <option value="anime">Anime</option>
            <option value="family">Family</option>
        </select>

    </form>{{--}}


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