<?php

namespace App\Kangaroo;

use Illuminate\Support\Facades\Auth;

class AuthKangaroo {

	public function login($data)
	{
		if(Auth::attempt($data))
		{
			return redirect()->route('home');
		}else 
		{
			return back()->with('error','Invalid Email/Password Combination');
		}
	}

	public function logout()
	{
		Auth::logout();
		return redirect()->route('login');
	}
}