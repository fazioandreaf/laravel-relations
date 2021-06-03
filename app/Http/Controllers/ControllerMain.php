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
        // dd($request -> all());
        $validate=$request -> validate([
            'name'=>'required|string',
            'model'=>'required|string',
            'kW'=>'required|integer',
        ]);
        $brand=Brand::findOrFail($request->get('brand_id'));
        $car=Car::make($validate);
        // dd($brand->name);
        $car ->brand() -> associate($brand);
        $car ->save();
        // dd($request -> get('pilots_id'));
        // $car -> pilots() -> attach($request -> get('pilots_id'));
        // $car -> save();
        return redirect()->route('home');

    }
}
