<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function profil () {
        return view('profil/general');
    }
    
    public function general () {
        return view('profil/general');
    }

    public function password () {
        return view('profil/password');
    }



    
}
