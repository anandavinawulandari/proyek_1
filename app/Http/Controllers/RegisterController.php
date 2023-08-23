<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
class RegisterController extends Controller
{
    protected function create(array $data)
    {
    return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'level' => $data['level'], 
    ]);
}
}