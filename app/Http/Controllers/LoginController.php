<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\resources\views\layouts\master;

class LoginController extends Controller
{
    
    public function logoutku()
    {
        Auth::logout();
        return redirect('/');
    }
}
