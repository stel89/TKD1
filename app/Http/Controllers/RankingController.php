<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RankingController extends Controller
{
    public function index()
	{
		$sportsmans = DB::table('sportsmans')->orderBy('raiting', 'desc')->paginate(20);
		
	return view('ranking',['sportsmans' => $sportsmans]);	

	
	}
}
