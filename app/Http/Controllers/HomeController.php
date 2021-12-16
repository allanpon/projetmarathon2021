<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = Serie::all();
        $data5 = $data->random(5);
        $data3 = $data->random(3);
        return view('welcome', ['data5'=> $data5, 'data3' => $data3]);
    }
}
