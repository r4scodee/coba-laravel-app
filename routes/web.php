<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

Route::get('/', function () {
    return view('halo');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get("/profil", [AppController::class, "profil"]);