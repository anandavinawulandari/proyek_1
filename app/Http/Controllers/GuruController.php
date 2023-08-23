<?php

namespace App\Http\Controllers;
use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class GuruController extends Controller
{
    public function __construct(){
        $this->middleware('guru');
    }
}
