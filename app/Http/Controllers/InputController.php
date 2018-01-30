<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Input;

class InputController extends Controller
{
    public function index()
    {
        //抓出資料庫的所有資料放入變數 
        $inputs=Input::all();
        
        //回傳input view 並傳回變數 
        return view('input',['inputs'=>$inputs]);
    }
    public function input(Request $request)
    {
        //存入資料庫一般寫法
        // $in=$request->input('input');
        // // $input=new Input();
        // // $input->input=$in;
        // // $input->save();
        
        //批量賦予
        $input=Input::create($request->all()) ;    
        
        //重新導向
        return redirect('input');
        
    }
    public function delete(Request $request){


    }
}
