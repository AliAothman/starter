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
Route::get('/landing', function () {
    return view('landing');
});
Route::group(['namespace'=>'App\Http\Controllers\Admin'], function(){
    Route::get('first', 'FirstController@showstring') ;
    Route::get('index1','FirstController@getindex');
});

Route::resource('news','App\Http\Controllers\Resources\NewsController');

Route::get('/about',function(){
    return view('about');
});

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware(['auth','verified'])->name('home');


