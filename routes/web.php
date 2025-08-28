<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [AppController::class, "dashboard"]);

Route::get('/halo', [AppController::class, "halo"]);

Route::get("/profil", [AppController::class, "profil"]);

Route::get("/kontak", [AppController::class, "kontak"]);