
<!doctype html>
@include("layouts.app")

<html>

<body>
    @section("content")
    Bonjour et bienvenue sur la liste des série !<br>
    <form id="form-search">
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

    </form>


    @if(count($data) ==0)
        <h1>Pas de résultat</h1>
    @else
        <h1>Il y a {{count($data)}} Résultats.</h1>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td></td>
                <td>Nom</td>
                <td>genre</td>
                <td>Langue</td>
                <td>nb saisons</td>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $serie)
                <tr>
                    <td><img src="/{{$serie->urlImage}}" alt="imageSerie" style="width:30px"></td>
                    <td>{{$serie->nom }}</td>
                    <td>{{$serie->genre }}</td>
                    <td>{{$serie->langue}}</td>
                    <td>{{$serie->nbSaisons()}}</td>
                    <td><a href="/series/{{$serie->id}}">Détail...</a></td>

                </tr>
            @endforeach
            </tbody>

        </table>
    @endif

</body>

</html>