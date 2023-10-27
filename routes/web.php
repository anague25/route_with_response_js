<?php

use App\Http\Controllers\PostController;
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





Route::get('/contact',function(){
    return view('contact');
});

// Route::get('fun/responses',function() use ($posts){
//     return response($posts,201)
//     ->header('Content-Type','application/json')
//     ->cookie('MY_COOKIE','SONNA ROOSVELT',3600);
// });


Route::get('/redirect',function(){
    return redirect('/contact');
});


Route::resource('postss',PostController::class)->only(['index','show']);

