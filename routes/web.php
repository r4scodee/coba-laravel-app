<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return view('halo');
});

Route::get("/profil", [AppController::class, "profil"]);

Route::get("/kontak", [AppController::class, "kontak"]);