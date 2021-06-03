<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class ControllerMain extends Controller
{
    public function home(){
        $car=Car::all();
        // dd($car);
        return view('pages.home',compact('car'));
    }
}
