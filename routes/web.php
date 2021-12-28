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
/*
Route::get('/cakes', function () {
    $cake = [
        'type' => 'Nigerian', 
        'base' => 'Vanilla Cheese', 
        'price' => 400 
    ];
    return view('cakes', $cake);
});
*/
//query parameters
/*    $name = request('name');
    return view('cakes', [
        'cakes' => $cakes,
        'name' => $name,
        'age' => request('age')
    ] );*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cakes', 'App\Http\Controllers\CakeController@index')->name('cakes.index')->middleware('auth');
Route::get('/cakes/create', "App\Http\Controllers\CakeController@create")->name('cakes.create');
Route::post('/cakes', "App\Http\Controllers\CakeController@store")->name('cakes.store');
Route::get('/cakes/{id}', "App\Http\Controllers\CakeController@show")->name('cakes.show')->middleware('auth');
Route::delete('/cakes/{id}', "App\Http\Controllers\CakeController@destroy")->name('cakes.destroy')->middleware('auth');


Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
