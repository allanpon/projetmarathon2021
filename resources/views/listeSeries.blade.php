
<!doctype html>
@include("layouts.app")

<html>

<body>
    @section("content")
    Bonjour et bienvenue sur la liste des série !<br>
    <form>
        <input type="text" name="recherche"/>
        <input type="submit" value="Envoyez">
        @if(!empty($search))
            <input type="submit" value="Réinitialisez">
        @endif
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