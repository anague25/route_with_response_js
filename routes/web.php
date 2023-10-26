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


$posts = [
    1 => [
        "title" => "je suis tres beau",
        "content" => "toute les filles me cours apres"   
        ],
    2 => [
        "title" => "la programationn",
        "content" => "c'est le meilleur metier"
        ]
    
    ];

Route::get('fun/responses',function() use ($posts){
    return response($posts,201)
    ->header('Content-Type','application/json')
    ->cookie('MY_COOKIE','SONNA ROOSVELT',3600);
});
