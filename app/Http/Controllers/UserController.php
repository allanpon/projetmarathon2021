<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function profile(){
        $com=DB::select('SELECT id FROM comments where validated=0  ORDER BY serie_id');
        return view('user.profile',['com'=>$com]);
    }

    public static function seen(Request $request,int $id){
        DB::insert('insert into seen values (?,?,?)',[Auth::id(),$id,date("Y-m-d",time())]);
        return redirect()->back()->with('message', 'le commentaire a été validé');
    }

}
