<!doctype html>
<html>
<body>

    Bonjour et bienvenue sur la liste des série !
    <table>
        <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td></td>
                <td>Nom</td>
                <td>genre</td>
                <td>Langue</td>

            </tr>
        </thead>
        <tbody>
        @foreach($data as $serie)
            <tr>
                <td><img src={{$serie->Urlimage}}></td>
                <td>{{$serie->nom }}</td>
                <td>{{$serie->genre }}</td>
                <td>{{$serie->langue}}</td>
            </tr>
        @endforeach
        </tbody>

    </table>
</body>

</html>