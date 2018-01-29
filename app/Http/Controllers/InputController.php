<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Input;

class InputController extends Controller
{
    public function index()
    {
        $inputs=Input::all();
        return view('input',['inputs'=>$inputs]);
    }
    public function input(Request $request){
        
        $input = new Input;

        $input->input = $request->in;

        $input->save();

        return redirect('input');
        
    }
}
