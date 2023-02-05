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
Route::get('/what-we-do', 'App\Http\Controllers\ServiceController@whatwedo');
Route::get('/about-us', 'App\Http\Controllers\ServiceController@aboutus');
Route::get('/free-digital-review', 'App\Http\Controllers\ServiceController@freedigitalreview');
Route::get('/services/websites', 'App\Http\Controllers\ServiceController@websites');
Route::get('/services/finding-new-leads', 'App\Http\Controllers\ServiceController@findingnewleads');
Route::get('/services/print-design', 'App\Http\Controllers\ServiceController@printdesign');
Route::get('/services/email-engagement', 'App\Http\Controllers\ServiceController@emailengagement');
Route::get('/services/data-capture', 'App\Http\Controllers\ServiceController@capturingdata');
Route::get('/services/growth-seo', 'App\Http\Controllers\ServiceController@growthseo');
Route::get('/learn-digital', 'App\Http\Controllers\ServiceController@learndigital');
Route::get('/contact', 'App\Http\Controllers\ServiceController@contact');
Route::get('/learn-digital-for-free', 'App\Http\Controllers\CharityWorkController@index');
Route::get('/privacy-policy', 'App\Http\Controllers\ServiceController@privacypolicy');
Route::get('/cookie-policy', 'App\Http\Controllers\ServiceController@cookiepolicy');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
