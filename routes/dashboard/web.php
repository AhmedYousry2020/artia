<?php

use App\Http\Controllers\AdminControllers\AboutController;
use App\Http\Controllers\AdminControllers\ConsultationController;
use App\Http\Controllers\AdminControllers\DoctorController;
use App\Http\Controllers\AdminControllers\SettingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\AdminControllers\AuthController;
use App\Http\Controllers\AdminControllers\BlogController;
use App\Http\Controllers\AdminControllers\FaqsController;
use App\Http\Controllers\AdminControllers\HomeController;
use App\Http\Controllers\AdminControllers\ReservationController;
use App\Http\Controllers\AdminControllers\ServiceController;
use App\Models\Doctor;
use App\Models\Setting;

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

Route::get('/dashboard',[HomeController::class,'index'])->name("dashboard.index")->middleware("authAdmin");;


Route::prefix('dashboard')->name('dashboard.')->group(function(){

    Route::get("/login",[AuthController::class, 'LoginForm'])->name("loginForm");

    Route::post("/login",[AuthController::class, 'Login'])->name("login");

    Route::get("/logout",[AuthController::class, 'Logout'])->name("logout");

});

Route::prefix('dashboard')->middleware("authAdmin")->name('dashboard.')->group(function(){


    Route::get('/settings/{setting?}', [SettingController::class,'settings'])->name('settings.index');
    Route::post('/settings/update',[SettingController::class, 'update'])->name('settings.update');
    Route::resource('/services',ServiceController::class);
    Route::resource('/blogs',BlogController::class);
    Route::resource('/doctors',DoctorController::class);
    Route::resource('/consultations',ConsultationController::class);
    Route::resource('/faqs',FaqsController::class);
    Route::get('/reservations', [ReservationController::class,'index'])->name('reservations.index');


});

Route::get('/change_language/ar',function(){
    Session::put('lang', 'ar' );
    return redirect()->back();
})->name("dashboard.changeLanguage.ar");

Route::get('/change_language/en',function(){
    Session::put('lang', 'en' );
    return redirect()->back();
})->name("dashboard.changeLanguage.en");
