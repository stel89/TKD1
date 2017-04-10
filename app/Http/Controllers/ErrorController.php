<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function err_401()
	{
		return view('errors/401');
	}
}
