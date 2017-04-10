<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Competition;
use App\User;
use App\sportsman;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CompetitionController extends Controller
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
         return view('NewCompetition');
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
            'tourname' => 'required|max:30',
			'date_from' => 'required',
			'date_to' => 'required',
			'country' => 'required|max:30',
			'region' => 'required|max:30',
			'town' => 'required|max:30',
			'address' => 'required|max:30',
			'description' => 'required',
			'program' => 'required',
			'contacts' => 'required',
			'court_count' => 'required',
			'logo' => 'image',
			'age_group' => 'required',
			'tournament_level' => 'required',
			'limited' => 'required',
			'judge_password' => 'required|max:30'			
        ]);
		
		$all = $request->all();
		
		$date1 = explode("-",$all['date_from']);
		$date2 = explode("-",$all['date_to']);
		
		$date_from = $date1[2].'.'.$date1[1].'.'.$date1[0];
		$date_to = $date2[2].'.'.$date2[1].'.'.$date2[0];
		
		
		
		if($request->hasFile('logo')) 
{
		$date=date('d.m.Y');
		$root=$_SERVER['DOCUMENT_ROOT']."/comp_avatar/"; 
		if(!file_exists($root.$date))    {mkdir($root.$date);} 
		$f_name=$request->file('logo')->getClientOriginalName();
		$request->file('logo')->move($root.$date,$f_name); 
		$all['logo']="/comp_avatar/".$date."/".$f_name;
		
		$comp = Competition::Create ([
		'tourname'  => $all['tourname'],
		'type'  => $all['type'],
		'date_from' => $all['date_from'],
		'date_to'  => $all['date_to'],
		'country'  => $all['country'],
		'reg'  => $all['region'],
		'town'  => $all['town'],
		'adress' => $all['address'],
		'description' => $all['description'],
		'programm' => $all['program'],
		'contacts' => $all['contacts'],
		'logo' => $all['logo'],
		'age_group' =>implode(',',$all['age_group']),
		'tournament_level' => $all['tournament_level'],
		'code' => $all['code'],
		'court_count' => $all['court_count'],
		'limited' => $all['limited'],
		'judge_password' => $all['judge_password'],
		'judge_id' => '',
		'sportsman_id' => '',
		'trainer_id' => '',
		'pass' =>'',
		'results' => '',
		'gold' =>'',
		'silver' =>'',
		'bronze' =>'',
		'creator' => Auth::user()->surname.' '.Auth::user()->name.' '.Auth::user()->patronymic
		]);
}
else
{
$comp = Competition::Create ([
		'tourname'  => $all['tourname'],
		'type'  => $all['type'],
		'date_from' => $all['date_from'],
		'date_to'  => $all['date_to'],
		'country'  => $all['country'],
		'reg'  => $all['region'],
		'town'  => $all['town'],
		'adress' => $all['address'],
		'description' => $all['description'],
		'programm' => $all['program'],
		'contacts' => $all['contacts'],
		'logo' => '/comp_avatar/default.png',
		'age_group' => implode(',',$all['age_group']),
		'tournament_level' => $all['tournament_level'],
		'code' => $all['code'],
		'court_count' => $all['court_count'],
		'limited' => $all['limited'],
		'judge_password' => $all['judge_password'],
		'judge_id' => '',
		'sportsman_id' => '',
		'trainer_id' => '',
		'pass' => '',
		'results' => '',
		'gold' =>'',
		'silver' =>'',
		'bronze' =>'',
		'creator' => Auth::user()->surname.' '.Auth::user()->name.' '.Auth::user()->patronymic
		]);
}
return back()->with('message','Змагання створено / Competition created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $competition = Competition::find($id);
		if ($competition->code == '' or $competition->code == null)
		{
			return view ('competition_info', ['competition' => $competition]);	
		}
		else
		{
			if ($request->session()->has('check'))
			{
				if ($request->session()->get('check') == $competition->code)
				{
					return view ('competition_info', ['competition' => $competition]);	
				}
				else
				{
					return view ('code',['competition' => $competition]);		
				}
			}
			else
			{
				return view ('code',['competition' => $competition]);	
			}
			
		}
    }
	
	public function check($id, Request $request)
	{
	$competition = Competition::find($id);

	if ($competition->code == $request->access_code)
	{
		session(['check' => $competition->code]);
		return view ('competition_info', ['competition' => $competition]);
	}
	else
	{
		return view('errors.403');
	}
	
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
        $competition = Competition::find($id);
	
 $this->validate($request, [
            'tourname' => 'required|max:30',
			'date_from' => 'required',
			'date_to' => 'required',
			'country' => 'required|max:30',
			'region' => 'required|max:30',
			'town' => 'required|max:30',
			'address' => 'required|max:30',
			'description' => 'required',
			'program' => 'required',
			'contacts' => 'required',
			'court_count' => 'required',
			'logo' => 'image',
			'age_group' => 'required',
			'tournament_level' => 'required',
			'limited' => 'required',
			'judge_password' => 'max:30'			
        ]);
		
		$all = $request->all();
		
		$date1 = explode("-",$all['date_from']);
		$date2 = explode("-",$all['date_to']);
		
		$date_from = $date1[2].'.'.$date1[1].'.'.$date1[0];
		$date_to = $date2[2].'.'.$date2[1].'.'.$date2[0];
		
		
		
		if($request->hasFile('logo')) 
{
		$date=date('d.m.Y');
		$root=$_SERVER['DOCUMENT_ROOT']."/comp_avatar/"; 
		if(!file_exists($root.$date))    {mkdir($root.$date, 0777, true); chmod($root.$date, 0777);} 
		$f_name=$request->file('logo')->getClientOriginalName();
		$request->file('logo')->move($root.$date,$f_name); 
		$all['logo']="/comp_avatar/".$date."/".$f_name;
		
		$competition->tourname = $all['tourname'];
		$competition->date_from = $all['date_from'];
		$competition->date_to = $all['date_to'];
		$competition->country = $all['country'];
		$competition->reg = $all['region'];
		$competition->town = $all['town'];
		$competition->adress = $all['address'];
		$competition->description= $all['description'];
		$competition->programm = $all['program'];
		$competition->contacts = $all['contacts'];
		if (trim($competition->logo <>'/comp_avatar/default.png' or $competition->logo <> $all['logo']))
		{
			unlink($_SERVER['DOCUMENT_ROOT'].$competition->logo);
		}
		$competition->logo = $all['logo'];
		$competition->age_group = implode(',',$all['age_group']);
		$competition->tournament_level = $all['tournament_level'];
		$competition->court_count = $all['court_count'];
		$competition->limited = $all['limited'];
		if (trim($all['code']) <> '' or trim($all['code']) <> null) $competition->code = $all['code'];
		if (trim($all['judge_password']) <> '' or trim($all['judge_password']) <> null) $competition->judge_password = $all['judge_password'];
	
}
else
{
$competition->tourname = $all['tourname'];
		$competition->date_from = $all['date_from'];
		$competition->date_to = $all['date_to'];
		$competition->country = $all['country'];
		$competition->reg = $all['region'];
		$competition->town = $all['town'];
		$competition->adress = $all['address'];
		$competition->description= $all['description'];
		$competition->programm = $all['program'];
		$competition->contacts = $all['contacts'];
		$competition->age_group = implode(',',$all['age_group']);
		$competition->tournament_level = $all['tournament_level'];
		$competition->court_count = $all['court_count'];
		$competition->limited = $all['limited'];
		if (trim($all['code']) <> '' or trim($all['code']) <> null) $competition->code = $all['code'];
		if (trim($all['judge_password']) <> '' or trim($all['judge_password']) <> null) $competition->judge_password = $all['judge_password'];
}
$competition->save();
return redirect('/competition/'.$competition->id)->with('message','Змагання успішно відредаговано / competition successfully edit');
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
	
public function participants($id, Request $request )
	{
		 $competition = Competition::find($id);
		 $trainers1 = explode(',', $competition->trainer_id);
		 $judje1 = explode(',', $competition->judge_id);
		 $sportsmans1 = explode(',', $competition->sportsman_id);
		 
		 $trainers = DB::table('users')->whereIn('id', $trainers1)->get(); 
		 $sportsmans = DB::table('sportsmans')->whereIn('id', $sportsmans1)->get(); 
		 $judges = DB::table('users')->whereIn('id', $judje1)->get(); 

			if ($competition->code == '' or $competition->code == null)
		{
			return view('participants',['trainers' => $trainers, 'sportsmans' => $sportsmans, 'competition' => $competition]);
		}
		else
		{
			if ($request->session()->has('check'))
			{
				if ($request->session()->get('check') == $competition->code)
				{
					return view('participants',['trainers' => $trainers, 'sportsmans' => $sportsmans, 'competition' => $competition]);	
				}
				else
				{
					return view ('code',['competition' => $competition]);		
				}
			}
			else
			{
				return view ('code',['competition' => $competition]);	
			}
			
		}
	
	
	}
	
	public function judges ($id, Request $request)
	{
		 $competition = Competition::find($id);
		 $judje1 = explode(',', $competition->judge_id);
		 
		 $judges = DB::table('users')->whereIn('id', $judje1)->get(); 
		 		
	if ($competition->code == '' or $competition->code == null)
		{
			return view('judges',['judges' => $judges, 'competition' => $competition]);
		}
		else
		{
			if ($request->session()->has('check'))
			{
				if ($request->session()->get('check') == $competition->code)
				{
					return view('judges',['judges' => $judges, 'competition' => $competition]);	
				}
				else
				{
					return view ('code',['competition' => $competition]);		
				}
			}
			else
			{
				return view ('code',['competition' => $competition]);	
			}
			
		}
	
	
	
	}
	
public function participate($id)
{
	$competition = Competition::find($id);
	
	 $profile = Auth::user();
		
	$trainer =  $profile->surname.' '.$profile->name.' '.$profile->patronymic;
		
	$sportsmans = DB::table('sportsmans')->where('trainer_one', $trainer)->get();
	
	return view('participate', ['competition' => $competition, 'sportsmans' => $sportsmans]);
}

public function add_sportsman($id, Request $request)
{
	$competition = Competition::find($id);
	$profile = Auth::user();
	$trainer =  $profile->surname.' '.$profile->name.' '.$profile->patronymic;	
	$sportsmans = DB::table('sportsmans')->where('trainer_one', $trainer)->get();
	$string = $competition->sportsman_id;
	
	//Запишем тренеру что он принимает устие в этом соревновании
	$trainer1 = User::find(Auth::user()->id);
	$trainer1->participation = $trainer1->participation.$competition->id.',';
	$trainer1->save();
	
	$i=0;
	 foreach ($sportsmans as $sportsman)
	 {
	 $i++;
	 }
	
	if ($competition->trainer_id == '' or $competition->trainer_id == null)
	{
		$competition->trainer_id = ''.$profile->id;
	}
	else
	{
	 $competition->trainer_id = $competition->trainer_id.','.$profile->id;	
	}
	
	if ($request <> '' or $request <> null)
		{
			for ($a = 1; $a<= $i; $a++)
			{
				if ($request['sportsman'.$a]<> '' or $request['sportsman'.$a]<>null)
				{
				$string = $string.$request['sportsman'.$a].',';
				$sportsman = sportsman::find($request['sportsman'.$a]);
				$sportsman->participation = $sportsman->participation.$competition->id.',';
				$sportsman->save();
				}
			}
			$competition->sportsman_id = $string;
			$competition->save();
			return redirect('/competition/'.$competition->id)->with('message', 'Ви зареєстровані у змаганні/ Successfully registred');
		}
	else return back()->with('error','Оберіть хочаб одного спортсмена / You must choose at least one sportsman');
		}

public function quit($id)
{
$competition = Competition::find($id);
$trainer = Auth::user();
$trainer11 =  $trainer->surname.' '.$trainer->name.' '.$trainer->patronymic;
$sportsmans	= DB::table('sportsmans')->where('trainer_one', $trainer11)->get();

//чистим из соревнования
//сперва тренера
$trainers = explode(',', $competition->trainer_id);
if (in_array($trainer->id, $trainers))
{
$key = array_search($trainer->id, $trainers);
unset($trainers[$key]);
$trainers1 = implode(',',$trainers);
$trainers1 = $trainers1.',';
$competition->trainer_id = $trainers1;
}
//затем спортсменов
$sportsman = explode(',', $competition->sportsman_id);
foreach ($sportsmans as $sportsman1)
{
if (in_array($sportsman1->id, $sportsman))
{
$key = array_search($sportsman1->id, $sportsman);
unset($sportsman[$key]);
//echo($key);
//echo($sportsman1->id);
}
}
$sportsman1 = implode(',',$sportsman);
$sportsman1 = $sportsman1.',';

$competition->sportsman_id = $sportsman1;

$competition->save();

//чистим из тренера

$temp = explode(',', $trainer->participation);
if (in_array($competition->id, $temp))
{
$key = array_search($competition->id, $temp);
unset($temp[$key]);
$temp1 = implode(',',$temp);
$temp1 = $temp1.',';

$trainer->participation = $temp1;
$trainer->save();
}
//Чистим из спортсменов
foreach ($sportsmans as $sportsman1)
{
$temp2 = explode(',', $sportsman1->participation);
if (in_array($competition->id, $temp2))
{
$key = array_search($competition->id, $temp2);
unset($temp2[$key]);
$temp3 = implode(',',$temp2);
$temp3 = $temp3.',';

$sportsman2 = sportsman::find($sportsman1->id);
$sportsman2->participation = $temp3;
$sportsman2->save();
}	
}

return back()->with('message', 'Ви зняті з змагання / You quit from competition');

}

public function judge_participate($id)
{
	$competition = Competition::find($id);
	$judge = Auth::user();
	
	if ($competition->judge_password == '' or $competition->judge_password == null or $competition->judge_password == ' ')
	{
	$competition->judge_id = $competition->judge_id.','.$judge->id;
	$competition->save();
	
	$judge->participation = $judge->participation.','.$competition->id;
	$judge->save();
	
	return back()->with('message', 'Ви зарееструвались у змаганні / Successfully registred');
	}
	else
	{
		return view ('code_judge',['competition' => $competition]);
	}
	
}

public function judge_quit($id)
{
	$competition = Competition::find($id);
	$judge = Auth::user();
	
$judges = explode(',', $competition->judge_id);
if (in_array($judge->id, $judges))
{
$key = array_search($judge->id, $judges);
unset($judges[$key]);
$judges1 = implode(',',$judges);
$competition->judge_id = $judges1;
$competition->save();
}

$judges = explode(',', $judge->participation);

if (in_array($competition->id, $judges))
{
$key = array_search($competition->id, $judges);
unset($judges[$key]);
$judges1 = implode(',',$judges);
$judge->participation = $judges1;
$judge->save();
}

return back()->with('message', 'Ви більше не приймаєте участь у змаганні / You quit from competition');

}

public function judge_pass($id, Request $request)
{
	$competition = Competition::find($id);
	$judge = Auth::user();
	
	if (trim($request->access_code) == trim ($competition->judge_password))
	{
	$competition->judge_id = $competition->judge_id.','.$judge->id;
	$competition->save();
	
	$judge->participation = $judge->participation.','.$competition->id;
	$judge->save();
	
	return redirect('/competition/'.$competition->id.'/judges')->with('message', 'Ви зарееструвались у змаганні / Successfully registred');	
	}
	else
	{
		return back()->with('error','Невірний код / Invalid code');
	}
}

public function result_add($id)
{
	$competition = Competition::find($id);


	if ($competition->results == '' and $competition->gold == '' and $competition->silver == '' and $competition->bronze == '')
	{
	$sportsmans	= explode(',',$competition->sportsman_id);
	$sportsman = DB::table('sportsmans')->whereIn('id', $sportsmans)->get();
	
	if ($competition->creator == (Auth::user()->surname.' '.Auth::user()->name.' '.Auth::user()->patronymic))
	{
	$competition = Competition::find($id);
	return view('Results_add',['competition' => $competition, 'sportsmans'=> $sportsman]);
	}
	else
	{
		return view('errors.403');
	}
	}
	else
	{
		return view('errors.403');
	}
}

public function result_store($id, Request $request)
{
	$competition = Competition::find($id);
	
		$competition->gold = '';
		$competition->silver = '';
		$competition->bronze = ''; 
		$competition->save(); 
	
	$a = explode(',',$competition->age_group);
	for ($i=0; $i< count($a); $i++)
	{
		$gold = implode(',',$request['gold'.$i]);
		$silver = implode(',',$request['silver'.$i]);
		$bronze = implode(',',$request['bronze'.$i]);
		
		$competition->gold = $competition->gold.','.$gold;
		$competition->silver = $competition->silver.','.$silver;
		$competition->bronze = $competition->bronze.','.$bronze; 		
	}
	
	$competition->results = $request['results'];
	$competition->save();
	
	$gold = explode(',', $competition->gold);
	$silver = explode(',', $competition->silver);
	$bronze = explode(',', $competition->bronze);
	$g_sportsmans = DB::table('sportsmans')->whereIn('id', $gold)->get();
	$s_sportsmans = DB::table('sportsmans')->whereIn('id', $silver)->get();
	$b_sportsmans = DB::table('sportsmans')->whereIn('id', $bronze)->get();
	
	foreach ($g_sportsmans as $sportsman)
	{
		$sportsman1 = Sportsman::find($sportsman->id);
		$sportsman1->gold = $sportsman1->gold.','.$competition->id;
		$sportsman1->save();
	}
	
	foreach ($s_sportsmans as $sportsman)
	{
		$sportsman1 = Sportsman::find($sportsman->id);
		$sportsman1->silver = $sportsman1->silver.','.$competition->id;
		$sportsman1->save();
	}
	
	foreach ($b_sportsmans as $sportsman)
	{
		$sportsman1 = Sportsman::find($sportsman->id);
		$sportsman1->bronze = $sportsman1->bronze.','.$competition->id;
		$sportsman1->save();
	}
	
	//Считаем рейтинг///
	
			$sportsmans = DB::table('sportsmans')->get();
		
		foreach ($sportsmans as $sportsman)
		{
			$gold = explode(',',$sportsman->gold);
			$silver = explode(',',$sportsman->silver);
			$bronze = explode(',',$sportsman->bronze);
			foreach ($gold as $key => $value)
			{
				if ($value == "" or $value ==' ')
				{
					unset($gold[$key]);
				}

			}
			
				foreach ($silver as $key => $value)
			{
				if ($value == "" or $value ==' ')
				{
					
					unset($silver[$key]);
				}

			}
			
				foreach ($bronze as $key => $value)
			{
				if ($value == "" or $value ==' ')
				{
					unset($bronze[$key]);
				}
			}

			$raiting1 = 3*count($gold) + 2*count($silver) + count($bronze);

			$sportsman1 = Sportsman::find($sportsman->id);
			$sportsman1->raiting = $raiting1;
			$sportsman1->save();
		}
	
	
	//Конец рейтинга//
	return redirect('/competition/'.$competition->id)->with('message','Результати добавлені / Results added');
}

public function result_index($id)
{
	$competition = Competition::find($id);
	if ($competition->results <> '')
	{
		$g = explode(',',$competition->gold);
		$s = explode(',',$competition->silver);
		$b = explode(',',$competition->bronze);
		
	$g_sportsmans = DB::table('sportsmans')->whereIn('id', $g)->get();
	$s_sportsmans = DB::table('sportsmans')->whereIn('id', $s)->get();
	$b_sportsmans = DB::table('sportsmans')->whereIn('id', $b)->get();
		
	return view('Results_index',['competition' => $competition, 'g_sportsmans' => $g_sportsmans, 's_sportsmans' => $s_sportsmans, 'b_sportsmans' => $b_sportsmans]);
	}
	else
	{
		return back()->with('message','Результатів ще немає / There is no results on this time');
	}
}

public function change_index($id)
{
	$competition = Competition::find($id);
	
	 $profile = Auth::user();
		
	$trainer =  $profile->surname.' '.$profile->name.' '.$profile->patronymic;
		
	$sportsmans = DB::table('sportsmans')->where('trainer_one', $trainer)->get();
	
	return view('change', ['competition' => $competition, 'sportsmans' => $sportsmans]);
}

public function change($id, Request $request)
{
	$competition = Competition::find($id);
	
	 $profile = Auth::user();
		
	$trainer =  $profile->surname.' '.$profile->name.' '.$profile->patronymic;
		
	$sportsmans = DB::table('sportsmans')->where('trainer_one', $trainer)->get();
//Удаляем прошлых спортсменов	из соревнвоания
$sportsman = explode(',', $competition->sportsman_id);
foreach ($sportsmans as $sportsman1)
{
if (in_array($sportsman1->id, $sportsman))
{
$key = array_search($sportsman1->id, $sportsman);
unset($sportsman[$key]);
//echo($key);
//echo($sportsman1->id);
}
}

$sportsman1 = implode(',',$sportsman);
$sportsman1 = $sportsman1.',';
$competition->sportsman_id = $sportsman1;
$competition->save();

	$string = $competition->sportsman_id; //Сколько нервов съела эта строчка из за того что не там объявлялась -_-

//И спортсмены больше не учавствуют в соревновании 
foreach ($sportsmans as $sportsman1)
{
$temp2 = explode(',', $sportsman1->participation);
if (in_array($competition->id, $temp2))
{
$key = array_search($competition->id, $temp2);
unset($temp2[$key]);
$temp3 = implode(',',$temp2);
$temp3 = $temp3.',';

$sportsman2 = sportsman::find($sportsman1->id);
$sportsman2->participation = $temp3;
$sportsman2->save();
}	
}
//Пишем новый состав команды
$i=0;
foreach ($sportsmans as $sportsman)
	{
	 $i++;
	 }

if ($request <> '' or $request <> null)
		{
			for ($a = 1; $a<= $i; $a++)
			{
				if ($request['sportsman'.$a]<> '' or $request['sportsman'.$a]<>null)
				{
				$string = $string.$request['sportsman'.$a].',';
				$sportsman = sportsman::find($request['sportsman'.$a]);
				$sportsman->participation = $sportsman->participation.$competition->id.',';
				$sportsman->save();
				}
			}
			$competition->sportsman_id = $string;
			$competition->save();
			return redirect('/competition/'.$competition->id)->with('message', 'Ви змінили состав команді/ You change command');
		}
else return back()->with('error','Оберіть хочаб одного спортсмена/ You must choose at least one sportsman');
		}
	
public function change_competition($id)
{
$competition = Competition::find($id);

if ($competition->creator == (Auth::user()->surname.' '.Auth::user()->name.' '.Auth::user()->patronymic))
{
	if ($competition->type == 'competition')
	{
	return view('change_competition',['competition' => $competition]);
	}
	else if ($competition->type == 'seminar')
	{
		return view('Change_Seminar',['competition' => $competition]);
	}
	else if ($competition->type == 'training')
	{
	 return view('Change_Training',['competition' => $competition]);	
	}
	else if ($competition->type == 'pumce')
	{
		return view('Change_Pumce',['competition' => $competition]);
	}
}
else return view('errors.403');
	
}

	
}

