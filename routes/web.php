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


// Route::get('/home', function () {
//     $user = 'Martin';
//     $arr = [1, 3, 4];
//     // dd ($user, $arr); //dd: Affiche et arrête toi
//     // ddd($user, $arr); //ddd: die, dump and debug
//     return "<h1>Welcome " . $user . " !🐱‍👓</h1>";
// });

Route::get('/home', function () {
    // $articles = [
    //     [
    //         "id" => 1,
    //         "title" => "Titre Article 1",
    //         "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem expedita illum voluptatum, et, quibusdam provident molestias harum culpa alias nostrum blanditiis inventore quasi"
    //     ],
    //     [
    //         "id" => 2,
    //         "title" => "Titre Article 2",
    //         "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem expedita illum voluptatum, et, quibusdam provident molestias harum culpa alias nostrum blanditiis inventore quasi"
    //     ],
    //     [
    //         "id" => 3,
    //         "title" => "Titre Article 3",
    //         "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem expedita illum voluptatum, et, quibusdam provident molestias harum culpa alias nostrum blanditiis inventore quasi"
    //     ],
    // ];
    $articles = [];
    return view("admin.home", [
        'toto' => $articles,
        "user" => "Martin",
    ]); //La fonction [VIEW] permettent de retourner une vue
});