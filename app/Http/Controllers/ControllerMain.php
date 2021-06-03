<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Pilot;
use App\Brand;

class ControllerMain extends Controller
{
    public function home(){
        $car=Car::all();
        // dd($car);
        return view('pages.home',compact('car'));
    }
    public function pilot($id){
        $pilot=Pilot::findOrFail($id);
        return view('pages.pilot',compact('pilot'));
    }
    public function add(){
        $brand=Brand::all();
        return view('pages.add',compact('brand'));
    }
    public function add_function(Request $request){
        dd($request->all());
        return redirect()->route('home',$car);

    }
}
