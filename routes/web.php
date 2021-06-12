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

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('parallax', function(){
    return view('parallax');

});

Route::get('parallaxMD', function(){
    return view('parallaxmaterial');

});

Route::get('/', function(){
    return view('home');

});
Route::get('login', function(){
    return view('login');

});
Route::get('registro', function(){
    return view('registro');

});
Route::get('leads', function(){
    return view('leads');

});
Route::get('cita', function(){
    return view('cita');

});
Route::get('contacto', function(){
    return view('contacto');

});
Route::get('impressum', function(){
    return view('impressum');

});
Route::get('AGB', function(){
    return view('AGB');

});
Route::get('resize', function(){
    return view('resize');

});
