<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Kangaroo\AuthKangaroo;

class AuthController extends Controller
{

    public function login()
    {
        return view('auth.login');
    }

    public function login_check(LoginRequest $request, AuthKangaroo $auth)
    {
        return $auth->login($request->only('email','password'));
    }

    public function register()
    {
        return view('auth.register');
    }
}
