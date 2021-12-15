<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    public function liste(){
        $series = Serie::all();
        return view('listeSeries', ['data' => $series]);
    }


}
