<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogOutController extends Controller
{
    public function logout(Request $request)
	{
	$request->session()->flush();
		Auth::logout();
	return redirect('/');
	}
}
