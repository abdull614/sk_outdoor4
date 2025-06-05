<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SyaratSewaController extends Controller
{
    public function syaratSewa () {
        return view ('syaratSewa');
    }
}
