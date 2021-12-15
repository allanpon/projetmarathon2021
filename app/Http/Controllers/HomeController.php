<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = Serie::all();
        $data5 = $data->random(5);
        return view('welcome', ['data'=>$data5]);
    }
}
