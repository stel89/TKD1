<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
        'email1' => 'required|unique:users,email|max:30|E-mail',
        'passw1' => 'required|max:50',
		'name1' => 'required|max:30',
		'surname1' => 'required|max:30',
		'patronymic1' => 'required|max:30',
		'org1' => 'required',
		'sex1' => 'required',
		'fst1' => 'required',
		'avatar1' => 'image',
		 ]);
		 
		$date=date('d.m.Y');
		$root=$_SERVER['DOCUMENT_ROOT']."/avatar/"; 
		if(!file_exists($root.$date))    {mkdir($root.$date);} 
		$f_name=$request->file('avatar1')->getClientOriginalName();
		$request->file('avatar1')->move($root.$date,$f_name); //перемещаем файл в папку с оригинальным именем
		$all=$request->all(); //в переменой $all будет массив, который содержит все введенные данные в форме
		$all['avatar1']="/avatar/".$date."/".$f_name;// меняем значение preview на нашу ссылку, иначе в базу попадет что-то вроде /tmp/sdfWEsf.tmp
		$user = User::create([
		'role' => $all['role'],
		'name' => $all['name1'],
		'email' => $all['email1'],
		'password' => bcrypt($all['passw1']),
		'surname' => $all['surname1'],
		'patronymic' => $all['patronymic1'],
		'country' => $all['country1'],
		'region' => $all['region1'],
		'town' => $all['town1'],
		'org' => $all['org1'],
		'sex' => $all['sex1'],
		'fst' => $all['fst1'],
		'participation' => '',
		'avatar' => $all['avatar1']
		]); //сохраняем массив в базу
		

		
		if (Auth::attempt(['email' => $all['email1'], 'password' => $all['passw1']])) { 
	     $user1 = Auth::user();		
		 return redirect('/');
		}
    }
	
	 public function store2(Request $request)
    {
         $this->validate($request, [
        'email2' => 'required|unique:users,email|max:30|E-mail',
        'passw2' => 'required|max:50',
		'name2' => 'required|max:30',
		'surname2' => 'required|max:30',
		'patronymic2' => 'required|max:30',
		'cat' => 'required',
		'sex2' => 'required',
		'avatar2' => 'image',
		 ]);
		 
		$date=date('d.m.Y');
		$root=$_SERVER['DOCUMENT_ROOT']."/avatar/"; 
		if(!file_exists($root.$date))    {mkdir($root.$date);} 
		$f_name=$request->file('avatar2')->getClientOriginalName();
		$request->file('avatar2')->move($root.$date,$f_name); //перемещаем файл в папку с оригинальным именем
		$all=$request->all(); //в переменой $all будет массив, который содержит все введенные данные в форме
		$all['avatar2']="/avatar/".$date."/".$f_name;// меняем значение preview на нашу ссылку, иначе в базу попадет что-то вроде /tmp/sdfWEsf.tmp
		
		$user = User::create([
		'role' => $all['role'],
		'name' => $all['name2'],
		'email' => $all['email2'],
		'password' => bcrypt($all['passw2']),
		'surname' => $all['surname2'],
		'patronymic' => $all['patronymic2'],
		'country' => $all['country2'],
		'region' => $all['region2'],
		'town' => $all['town2'],
		'cat' => $all['cat'],
		'sex' => $all['sex2'],
		'participation' => '',
		'avatar' => $all['avatar2']
		]); //сохраняем массив в базу
		

		
		if (Auth::attempt(['email' => $all['email2'], 'password' => $all['passw2']])) { 
	     $user1= Auth::user();		
		 return redirect('/');
		}
    }
	
		 public function store3(Request $request)
    {
         $this->validate($request, [
        'email3' => 'required|unique:users,email|max:30|E-mail',
        'passw3' => 'required|max:50',
		'name3' => 'required|max:30',
		'surname3' => 'required|max:30',
		'provider3' => 'required|max:30',
		'avatar3' => 'image',
		 ]);
		 
		$date=date('d.m.Y');
		$root=$_SERVER['DOCUMENT_ROOT']."/avatar/"; 
		if(!file_exists($root.$date))    {mkdir($root.$date);} 
		$f_name=$request->file('avatar3')->getClientOriginalName();
		$request->file('avatar3')->move($root.$date,$f_name); //перемещаем файл в папку с оригинальным именем
		$all=$request->all(); //в переменой $all будет массив, который содержит все введенные данные в форме
		$all['avatar3']="/avatar/".$date."/".$f_name;// меняем значение preview на нашу ссылку, иначе в базу попадет что-то вроде /tmp/sdfWEsf.tmp
		
		$user = User::create([
		'role' => $all['role'],
		'name' => $all['name3'],
		'email' => $all['email3'],
		'password' => bcrypt($all['passw3']),
		'surname' => $all['surname3'],
		'patronymic' => $all['provider3'],
		'country' => $all['country3'],
		'region' => $all['region3'],
		'town' => $all['town3'],
		'cat' => Null,
		'sex' => '-',
		'participation' => '',
		'avatar' => $all['avatar3']
		]); //сохраняем массив в базу
		

		
		if (Auth::attempt(['email' => $all['email3'], 'password' => $all['passw3']])) { 
	     $user1= Auth::user();		
		 return redirect('/');
		}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
