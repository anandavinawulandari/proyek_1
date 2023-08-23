<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanproyekController extends Controller
{
    public function home(){
        return view('home.index');
    }
    public function nilai(){
        return view('nilai.index');
    }
}
