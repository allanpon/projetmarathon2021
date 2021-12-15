<div>

    <div style="margin-left: 100px;margin-right: 100px;border-radius: 25px;border: 1px #455d5d">
        <img style="width:50px;float: left;border-radius: 25px" src="{{$c->avatar}}">
        <p style="float: left">{{$c->name}}</p>
        <p style="float: left;margin-left: 10px">Note : {{$c->note}}</p>
        @if(($c->validated)==0)
            <p style="float: right;
            margin-left: 10px;
            background-color: #f54242;
            border-radius: 20px;padding-left: 5px;padding-right: 5px">en attente de validation</p>
        @endif

        <br>
        <br>
        <br>
        {!! $c->content !!}
    </div>
</div>
