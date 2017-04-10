<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Auth;
use App\sportsman;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = Auth::user();
		
		$trainer =  $profile->surname.' '.$profile->name.' '.$profile->patronymic;
		
		$sportsmans = DB::table('sportsmans')->where('trainer_one', $trainer)->get();
		
		return view('profile', ['sportsmans' => $sportsmans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$user = User::find($id);
		
		$trainer =  $user->surname.' '.$user->name.' '.$user->patronymic;
		
		$sportsmans = DB::table('sportsmans')->where('trainer_one', $trainer)->get();
		
		return view('profile_show', ['user' => $user, 'sportsmans' => $sportsmans]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = User::find($id);
		
		if ($profile->role == "Тренер")
		{
			return view('edit_profile',['profile' => $profile]);
		}
		elseif ($profile->role == "Суддя")
		{
			return view('edit_judge', ['profile' => $profile]);
		}
		elseif ($profile->role == "Продавець")
		{
			return view('edit_seller', ['profile' => $profile]);
		}
		else
		{
			return view('errors.403');
		}
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
        $profile = User::find($id);
		
		$all=$request->all(); //в переменой $all будет массив, который содержит все введенные данные в форме
		
		if ($profile->role == 'Тренер') //Обновление Тренера
		{
		$trainer =  $profile->surname.' '.$profile->name.' '.$profile->patronymic;
		
		$sportsmans = DB::table('sportsmans')->where('trainer_one', $trainer)->get();
						
		$this->validate($request, [
        'email1' => 'required|max:30|E-mail',
        'passw1' => 'max:50',
		'name1' => 'required|max:30',
		'surname1' => 'required|max:30',
		'patronymic1' => 'required|max:30',
		'org1' => 'required',
		'sex1' => 'required',
		'fst1' => 'required',
		'avatar1' => 'image',
		 ]);
		 
		 		foreach($sportsmans as $sportsman)
		{
			$sportsman1 = sportsman::find($sportsman->id);
			$sportsman1->trainer_one = $all['surname1'].' '.$all['name1'].' '.$all['patronymic1'];
			$sportsman1->save();
		}
		 
		if($request->hasFile('avatar1'))
		{
		$date=date('d.m.Y');
		$root=$_SERVER['DOCUMENT_ROOT']."/avatar/"; 
		if(!file_exists($root.$date))    {mkdir($root.$date);} 
		$f_name=$request->file('avatar1')->getClientOriginalName();
		$request->file('avatar1')->move($root.$date,$f_name); //перемещаем файл в папку с оригинальным именем
		$all['avatar1']="/avatar/".$date."/".$f_name;// меняем значение preview на нашу ссылку, иначе в базу попадет что-то вроде /tmp/sdfWEsf.tmp
		unlink(substr($_SERVER['DOCUMENT_ROOT'], 0, -1).$profile->avatar);
		}
		$profile->name = $all['name1'];
		if (trim($all['passw1'])<> '' or trim($all['passw1']) <> null)
		{
			$profile->password = bcrypt(['passw1']);
		}
		$profile->email = $all['email1'];
		$profile->surname = $all['surname1'];
		$profile->patronymic = $all['patronymic1'];
		$profile->country = $all['country1'];
		$profile->region = $all['region1'];
		$profile->town = $all['town1'];
		$profile->org = $all['org1'];
		$profile->sex = $all['sex1'];
		$profile->fst = $all['fst1'];
		if($request->hasFile('avatar1'))
		{
		$profile->avatar = $all['avatar1'];
		}
		}
		
		else if ($profile->role == 'Суддя') //Обновление судьи
		{

		$this->validate($request, [
        'email2' => 'required|max:30|E-mail',
        'passw2' => 'max:50',
		'name2' => 'required|max:30',
		'surname2' => 'required|max:30',
		'patronymic2' => 'required|max:30',
		'sex2' => 'required',
		'cat' => 'required',
		'avatar1' => 'image',
		 ]);
		 
		 if($request->hasFile('avatar1'))
		{
		$date=date('d.m.Y');
		$root=$_SERVER['DOCUMENT_ROOT']."/avatar/"; 
		if(!file_exists($root.$date))    {mkdir($root.$date);} 
		$f_name=$request->file('avatar1')->getClientOriginalName();
		$request->file('avatar1')->move($root.$date,$f_name); //перемещаем файл в папку с оригинальным именем
		$all['avatar1']="/avatar/".$date."/".$f_name;// меняем значение preview на нашу ссылку, иначе в базу попадет что-то вроде /tmp/sdfWEsf.tmp
		unlink(substr($_SERVER['DOCUMENT_ROOT'], 0, -1).$profile->avatar);
		}
		$profile->name = $all['name2'];
		if (trim($all['passw2'])<> '' or trim($all['passw2']) <> null)
		{
			$profile->password = bcrypt(['passw2']);
		}
		$profile->email = $all['email2'];
		$profile->surname = $all['surname2'];
		$profile->patronymic = $all['patronymic2'];
		$profile->country = $all['country2'];
		$profile->region = $all['region2'];
		$profile->town = $all['town2'];
		$profile->org = $all['cat'];
		$profile->sex = $all['sex2'];
		if($request->hasFile('avatar1'))
		{
		$profile->avatar = $all['avatar1'];
		}
		}
		
		else if ($profile->role == 'Продавець')//Обновление продавца
		{
		$this->validate($request, [
        'email3' => 'required|max:30|E-mail',
        'passw3' => 'max:50',
		'name3' => 'required|max:30',
		'surname3' => 'required|max:30',
		'provider3' => 'required|max:30',
		'avatar1' => 'image',
		 ]);
		 
		  if($request->hasFile('avatar1'))
		{
		$date=date('d.m.Y');
		$root=$_SERVER['DOCUMENT_ROOT']."/avatar/"; 
		if(!file_exists($root.$date))    {mkdir($root.$date);} 
		$f_name=$request->file('avatar1')->getClientOriginalName();
		$request->file('avatar1')->move($root.$date,$f_name); //перемещаем файл в папку с оригинальным именем
		$all['avatar1']="/avatar/".$date."/".$f_name;// меняем значение preview на нашу ссылку, иначе в базу попадет что-то вроде /tmp/sdfWEsf.tmp
		unlink(substr($_SERVER['DOCUMENT_ROOT'], 0, -1).$profile->avatar);
		}
		$profile->name = $all['name3'];
		if (trim($all['passw3'])<> '' or trim($all['passw3']) <> null)
		{
			$profile->password = bcrypt(['passw3']);
		}
		$profile->email = $all['email3'];
		$profile->surname = $all['surname3'];
		$profile->patronymic = $all['provider3'];
		$profile->country = $all['country3'];
		$profile->region = $all['region3'];
		$profile->town = $all['town3'];
		
		if($request->hasFile('avatar1'))
		{
		$profile->avatar = $all['avatar1'];
		}
		}
		
		$profile->save();
		
		return redirect('/profile/')->with('message','Ваш профіль успішно змінен / Your profile successfuly changed');
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
