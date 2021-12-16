<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function profile(){
        $com=DB::select('SELECT name,avatar,content,note,validated,comments.id,comment.user_id FROM comments INNER JOIN users ON(users.id=comments.user_id) WHERE validated =0 ORDER BY serie_id');
        $com=DB::select('SELECT id FROM comment where validated=0');
        return view('user.profile',['com'=>$com]);
    }

}
