<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ {
        GenreController,
        CastController,
        RegisterController,
        AuthController,
        DashboardController,
    };
Route::get('/', function () {
    return view('welcome');
});

Route::controller(CastController::class)->group(function () {
    Route::get('/cast', 'index')->name('cast.index');
    //namplin list data
    Route::get('/cast/create', 'create')->name('cast.create');
    // nampilin form add data 
    Route::post('/cast', 'store')->name('cast.store'); 
    // proses menyim form add data
    Route::get('/cast/{cast}/edit', 'edit')->name('cast.edit'); 
    // nampilin form edit data
    Route::get('/cast/{cast}', 'show')->name('cast.show');
    // nampilin form detail data
    Route::put('/cast/{cast}', 'update')->name('cast.update');
    // proses menghapus data
    Route::delete('/cast/{cast}', 'delete')->name('cast.delete');
});


Route::controller(AuthController::class)->group(function() {
    Route::get('login', 'login')->name('login.login');
    Route::post('authenticate', 'authenticate')->name('auth.authenticate');
    Route::post('logout', 'logout')->name('auth.logout');
});

Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'create')->name('register.create');
    Route::post('/register', 'store')->name('register.store');
});

Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard/user', 'user')->name('dashboard.user');
    Route::post('/dashboard/admin', 'admin')->name('dashboard.admin');
});

