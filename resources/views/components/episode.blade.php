<div>
    <div style="margin-left: 10px;margin-right: 100px;border-radius: 25px;border: 1px #455d5d">
        <img style="width:125px;float: left;border-radius: 10px;border: 1px;border-color: #1a202c;height:70px " src="{{asset($ep->urlImage) }}" >
        <p style="float: left;margin-left: 10px">{{$ep->nom}}<br> Episode n°{{$ep->numero}} Saison {{$ep->saison}} Durée:{{$ep->duree}} min</p>
        <p style="float: right;margin-left: 10px">sorti le: {{$ep->premiere}}</p>
        @guest()
        @else
            <form action="{{ route('seen', $ep->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <button type="submit" style="margin-left: 10px;float: right">j'ai vu<br>cet episode</button>
            </form>
        @endguest
        <br>
        <br>
        <br>
        <div style="margin-left: 10px">{!! $ep->resume !!}</div>
        <br>

    </div>
</div>