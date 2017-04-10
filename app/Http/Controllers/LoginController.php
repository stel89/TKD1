<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
	{
		$request->session()->flush();
		
		if (Auth::attempt(['email' => $request->login, 'password' => $request->password])) {
            // Authentication passed...
            return redirect('/');
		}
		else
		{
			return back()->with('error', 'Невірний логін або пароль / Invalid login or password');
		}
	}
	
}
