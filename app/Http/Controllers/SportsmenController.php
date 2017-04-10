<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\sportsman;
use App\Competition;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SportsmenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$user = Auth::user();
        return view('sportsman_create',['user'=>$user]);
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
		'sportsurname' => 'required|max:30',
		'sportname' => 'required|max:30',
		'birthdate' => 'required|numeric',
		'rang_id' => 'required',
		'sex' => 'required',
		'dan' => 'required',
		'trainer_one' => 'required',
		'avatar1' => 'image',
		 ]);
		 
		if($request->hasFile('avatar1'))
		{
		$date=date('d.m.Y');
		$root=$_SERVER['DOCUMENT_ROOT']."/sportsmans/"; 
		if(!file_exists($root.$date))    {mkdir($root.$date);} 
		$f_name = $request->file('avatar1')->getClientOriginalName();
		$request->file('avatar1')->move($root.$date,$f_name); //перемещаем файл в папку с оригинальным именем
		$all['avatar1']="/sportsmans/".$date."/".$f_name;// меняем значение preview на нашу ссылку, иначе в базу попадет что-то вроде /tmp/sdfWEsf.tmp
		}
		else
		{
		$all['avatar1']='';	
		}
		 
    $trainer_two = $request['trainersurname'].' '.$request['trainername'].' '.$request['trainerpatronymic'];
    
	$sportsman = sportsman::create([
	'name' => $request['sportname'],
	'surname' => $request['sportsurname'],
	'birthday' => $request['birthdate'],
	'sex' => $request['sex'],
	'rang' => $request['rang_id'],
	'dan' => $request['dan'],
	'trainer_one' => $request['trainer_one'],
	'trainer_two' => $trainer_two,
	'participation' => '',
	'gold' => '',
	'silver' => '',
	'bronze' => '',
	'avatar' => $all['avatar1'],
	]);
	
	return back()->with('message', 'Спортсмен успішно додан до переліку спорсменів / Sportsman successfuly added to sportsman list');
	
	}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = sportsman::find($id);		
		$gold = explode(',',$user->gold);
		$silver = explode(',',$user->silver);
		$bronze = explode(',',$user->bronze);
		$all = explode (',',$user->participation);
		
		$gold = DB::table('competition')->whereIn('id', $gold)->get();
		$silver = DB::table('competition')->whereIn('id', $silver)->get();
		$bronze = DB::table('competition')->whereIn('id', $bronze)->get();
		$all = DB::table('competition')->whereIn('id', $all)->get();
		
		
		
		return view('sportsman_show', ['user' => $user, 'gold' => $gold, 'silver' => $silver, 'bronze' => $bronze, 'all' => $all]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sportsman = sportsman::find($id);
		
		return view('sportsman_edit',['sportsman' => $sportsman]);
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
        $sportsman = sportsman::find($id);
		
								
		$this->validate($request, [
		'sportsurname' => 'required|max:30',
		'sportname' => 'required|max:30',
		'birthdate' => 'required|numeric',
		'rang_id' => 'required',
		'sex' => 'required',
		'dan' => 'required',
		'trainer_one' => 'required',
		'avatar1' => 'image',
		 ]);
		
		$all = $request->all(); //в переменой $all будет массив, который содержит все введенные данные в форме

		if($request->hasFile('avatar1'))
		{
		$date=date('d.m.Y');
		$root=$_SERVER['DOCUMENT_ROOT']."/sportsmans/"; 
		if(!file_exists($root.$date))    {mkdir($root.$date);} 
		$f_name = $request->file('avatar1')->getClientOriginalName();
		$request->file('avatar1')->move($root.$date,$f_name); //перемещаем файл в папку с оригинальным именем
		$all['avatar1']="/sportsmans/".$date."/".$f_name;// меняем значение preview на нашу ссылку, иначе в базу попадет что-то вроде /tmp/sdfWEsf.tmp
		if (trim($sportsman->avatar <> ''))
		{
		unlink($_SERVER['DOCUMENT_ROOT'].$sportsman->avatar);
		}
		}
		$sportsman->name = $all['sportname'];
		$sportsman->surname = $all['sportsurname'];
		$sportsman->birthday = $all['birthdate'];
		$sportsman->sex = $all['sex'];
		$sportsman->dan = $all['dan'];
		$sportsman->trainer_two = $all['trainer_two']; 
		if($request->hasFile('avatar1'))
		{
		$sportsman->avatar = $all['avatar1'];
		}
		$sportsman->save();
		
		return redirect('/profile/')->with('message','Профіль спрортсмена успішно змінен / Sportsman profile successfuly changed');		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sportsman = sportsman::find($id);
		$competitions= explode(',', $sportsman->participation);

		if ($competitions <> null or $competitions <> '' or $competitions <> ' ')
		{
		for ($i=0; $i < count($competitions); $i++)
			{
				if ($competitions[$i] <> '' or $competitions[$i] <> ' ' or $competitions[$i] <> null)
				{
					$competition1 = Competition::find($competitions[$i]);
					//var_dump($competition1);
					echo('2');
					if ($competition1 <> null or $competition1 <> '')
					{
						echo('1');
						$participants = explode(',', $competition1->sportsman_id);
//						var_dump($participants);
	//					var_dump($competition1->sportsman_id);
						if (in_array($sportsman->id, $participants))
						{
						echo('3');
						$key = array_search($sportsman->id, $participants);
						unset($participants[$key]);
						$participant2 = implode(',',$participants);
						var_dump($participant2);
						$participant2 = $participant2.',';
						$competition1->sportsman_id = $participant2;
						$competition1->save();
}
					}
				
			}			
		}
		}	
		$sportsman->delete();
		return back()->with('message','Cпортсмен видален з вашої команди / Sportsman deleted from your team');
    }

}
