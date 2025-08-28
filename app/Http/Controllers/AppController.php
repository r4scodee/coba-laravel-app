<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function profil(){
        return view("profil");
    }

    public function kontak(){
        return view("kontak");
    }
}
