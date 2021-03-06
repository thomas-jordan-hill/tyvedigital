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

Route::get('/services', 'App\Http\Controllers\ServiceController@index');
Route::get('/services/websites', 'App\Http\Controllers\ServiceController@websites');
Route::get('/services/designer', 'App\Http\Controllers\ServiceController@designer');
Route::get('/contact', 'App\Http\Controllers\ServiceController@contact');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
