<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ProfileController;
use App\Http\Controllers;

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

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/', [ProfileController::class, 'dashboard'])->name('dashboard');
Route::group(['namespace' => 'App\Http\Controllers'], function() {
    Route::get('/', 'HomeController@index')->name('dashboard');

    Route::group(['middleware' => ['guest']], function(){
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
    });

    Route::group(['middleware' => ['auth']], function(){
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});


