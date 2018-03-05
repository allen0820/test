<?php

namespace App\Http\Controllers;

use App\Dodata;
use Illuminate\Http\Request;
use App\Input;

class ChartController extends Controller
{
    public function index()
    {
        $data=Dodata::all();
        return view('chart',['data'=>$data]);
    }

    public function input(Request $request)
    {
        $app=$request->app;
        echo $app.'<br>';
//        switch($app){
//            case 'Google':
//                $id=1;
//                break;
//            case 'Youtube':
//                $id=2;
//                break;
//            case 'Instagram':
//                $id=3;
//                break;
//            case 'Facebook':
//                $id=4;
//                break;
//            case 'Dcard':
//                $id=5;
//                break;
//            default:
//                $id=6;
//                break;
//        }
//
//
        $data=Dodata::where('app','=',$app)->get();
        echo $data[0];
        $data[0]->votes++;
        $data[0]->save();
        return redirect('chart');

//        $votes=Dodata::where('app','=',$app)->pluck('votes');
//        $votes[0]=$votes[0]+1;
//        $data=Dodata::where('app','=',$app)->update(array('votes'=>$votes[0]));




    }
}
