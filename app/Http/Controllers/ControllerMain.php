<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Pilot;

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
}
