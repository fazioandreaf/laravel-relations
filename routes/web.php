<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pages/home', 'ControllerMain@home')->name('home');
Route::get('/pilot/{id}', 'ControllerMain@pilot')->name('pilot');
Route::get('/add', 'ControllerMain@add')->name('add');
Route::post('/add_function', 'ControllerMain@add_function')->name('add_function');

