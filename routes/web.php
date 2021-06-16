<?php

use Illuminate\Support\Facades\Route;    
use App\Http\Controllers\TrafficController;  

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


//home
Route::view('/', 'home')->name('home');


//api
Route::apiResource('/api','App\Http\Controllers\TrafficController');
Route::post('/api','App\Http\Controllers\TrafficController@store')->name('api');
Route::get('/show/{id}','App\Http\Controllers\TrafficController@show')->name('show');
Route::patch('/update/{id}','App\Http\Controllers\TrafficController@update')->name('update');
Route::get('/delete/{id}','App\Http\Controllers\TrafficController@show')->name('delete');
Route::patch('/destroy/{id}','App\Http\Controllers\TrafficController@destroy')->name('destroy');