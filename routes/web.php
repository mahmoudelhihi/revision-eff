<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DepartementController;
use App\Models\Departement;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/departs', [DepartementController::class, 'index'])->name('depart_index');

Route::get('/test', function(){
    return "hi!";
});

Route::controller(DepartementController::class)->group(function(){
    Route::get('departs/create', 'create')->name('depart_create')->middleware('auth');
    Route::post('departs/store', 'store')->name('depart_store')->middleware('auth');
    Route::post('departs/delete/{id}', 'delete')->name('depart_delete')->middleware('auth');
    Route::get('departs/update/{id}', 'update')->name('depart_update')->middleware('auth');
    Route::post('departs/update/{id}', 'modify')->name('depart_modify')->middleware('auth');
});

Route::controller(AuthController::class)->group(function(){
    Route::get('login', 'auth')->name('log');
    Route::post('login', 'login')->name('login');
    Route::get('register', 'authi')->name('ajoute');
    Route::post('register', 'register')->name('register');
});

// Route::resource('/depart', DepartementController::class);

// Route::resource('depart', Departement::class);