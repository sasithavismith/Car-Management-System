<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Allcar;
class Carcontroller extends Controller
{
    public function create(Request $request){
        $make=$request['make'];
       $model=$request['model'];
       $produced_on=$request['Produced_on'];
        $car=new Allcar();

        $car->make=$make;
        $car->model=$model;
        $car->produced_on=$produced_on;
//dd($request->all());
        $car->save();
      // return redirect()->back();
    
    $allcars=Allcar::all();
   // dd($allcars);
   return view('index')->with('CAR',$allcars);
   return redirect()->back('/home');
    }
}
