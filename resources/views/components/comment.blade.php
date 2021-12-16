<?php
$ct=DB::select('SELECT name,avatar,content,note,validated,comments.id,comments.user_id FROM comments INNER JOIN users ON(users.id=comments.user_id) WHERE comments.id= ? ',[$com->id]);
foreach ($ct as $ct2){
    $c=$ct2;
}
?>
@if(Auth::user()->id=$c->user_id||$c->validated==1||Auth::user()->administrateur)
    <div>
        <div style="margin-left: 100px;margin-right: 100px;border-radius: 25px;border: 1px #455d5d">
            <img style="width:50px;float: left;border-radius: 25px" src="{{asset($c->avatar)}}">
            <p style="float: left">{{$c->name}}</p>
            <p style="float: left;margin-left: 10px">Note : {{$c->note}}</p>
            @if(($c->validated)==0)
                <p style="float: right;
                margin-left: 10px;
                background-color: #f54242;
                border-radius: 20px;padding-left: 5px;padding-right: 5px">en attente de validation</p>
                @if(Auth::user()->administrateur)
                    <form action="{{ route('valide', $c->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <button type="submit" style="margin-left: 10px;float: right">validerooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo</button>
                    </form>
                @endif
            @endif
            @if(Auth::user()->id=$c->user_id||Auth::user()->administrateur)
                <form action="{{ route('delete', $c->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <button type="submit" style="margin-left: 10px;float: right">supprimer le<br>commentaire</button>
                </form>
            @endif
            <br>
            <br>
            <br>
            <div>{!! $c->content !!}</div>
        </div>
    </div>
@endif