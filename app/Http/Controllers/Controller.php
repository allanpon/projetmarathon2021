<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function affiche(){
        $data=Serie::all();
        $data5=$data->random(5);
        return view('card',['data'=>$data5]);
    }
}
