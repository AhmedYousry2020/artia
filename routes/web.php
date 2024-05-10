<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TakkaController;
use Illuminate\Support\Facades\Session;

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

Route::get("/takka/{count}",[TakkaController::class, 'index'])->name("takka");

Route::controller(SiteController::class)->group(function(){
    Route::get('/','index');
    Route::get('/contact','contact');
    Route::get('/about-us','about');
    Route::get('/doctors','doctors');
    Route::get('/blogs','blogs');
    Route::get('/blog/{name}','blog');
    Route::get('/services','services');
    Route::get('/consultations','consultations');
    Route::get('/service/{name}','service');
    Route::get('/doctor/{name}','doctor');

    Route::get('/reservation','reservation');

    Route::post('/contact-us','contactUs');
    Route::post('/reserve','makeReserve');

});

Route::get('/change-language/en', function () {
    Session::put('lang', 'en');
    return redirect('/');
});

Route::get('/change-language/ar', function () {
    Session::put('lang', 'ar' );
    return redirect('/');
 });
