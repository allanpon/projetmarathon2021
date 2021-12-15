<!doctype html>
<html>
<body>

    Bonjour et bienvenue sur la liste des série !<br>
    <input type="text" name="recherche"/>
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
                <td><img src="{{$serie->urlImage}}" alt="imageSerie" style="width:30px"></td>
                <td>{{$serie->nom }}</td>
                <td>{{$serie->genre }}</td>
                <td>{{$serie->langue}}</td>
                <td>{{$serie->nbSaisons()}}</td>
                <td><a href="/series/{{$serie->id}}">Détail...</a></td>

            </tr>
        @endforeach
        </tbody>

    </table>
</body>

</html>