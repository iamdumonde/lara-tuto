<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    $user = 'Martin';
    $arr = [1, 3, 4];
    // dd ($user, $arr); //dd: Affiche et arrête toi
    ddd($user, $arr); //ddd: die, dump and debug
    return "<h1>Welcome " . $user . "!🐱‍👓</h1>";
});