<?php

namespace App\Http\Controllers;

use App\Dodata;
use Illuminate\Http\Request;
use App\Input;

class ChartController extends Controller
{
    public function index(){
        $do=Dodata::all();
        return view('chart',['data'=>$do]);
    }

    public function input(){


    }
}
