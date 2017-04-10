<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Competition;
use App\User;
use Illuminate\Support\Facades\Auth;

class TrainingController extends Controller
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
        return view('NewTraining');
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
			'logo' => 'image',
			'age_group' => 'required',
			'limited' => 'required',
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
		'age_group' => implode(',',$all['age_group']),
		'tournament_level' => '',
		'code' => '',
		'court_count' => '',
		'limited' => $all['limited'],
		'pass' => '',
		'judge_id' => '',
		'judge_password' => '',
		'sportsman_id' => '',
		'trainer_id' => '',
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
		'tournament_level' => '',
		'code' => '',
		'court_count' => '',
		'limited' => $all['limited'],
		'pass' => '',
		'judge_id' => '',
		'sportsman_id' => '',
		'judge_password' => '',
		'results' => '',
		'trainer_id' => '',
		'gold' =>'',
		'silver' =>'',
		'bronze' =>'',
		'creator' => Auth::user()->surname.' '.Auth::user()->name.' '.Auth::user()->patronymic
		]);
}
return back()->with('message','Тренувальний сбір створен / Training created');
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
		$competition = Competition::find($id);
		
                  $this->validate($request, [
            'tourname' => 'required|max:30',
			'date_from' => 'required',
			'date_to' => 'required',
			'region' => 'required|max:30',
			'town' => 'required|max:30',
			'address' => 'required|max:30',
			'description' => 'required',
			'program' => 'required',
			'contacts' => 'required',
			'logo' => 'image',
			'age_group' => 'required',
			'limited' => 'required',
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
		$competition->date_to  = $all['date_to'];
		$competition->reg  = $all['region'];
		$competition->town  = $all['town'];
		$competition->adress = $all['address'];
		$competition->description = $all['description'];
		$competition->programm = $all['program'];
		$competition->contacts = $all['contacts'];
		if (trim($competition->logo <>'/comp_avatar/default.png'))
		{
			if(trim($competition->logo <> $all['logo']))
			{
			unlink($_SERVER['DOCUMENT_ROOT'].$competition->logo);
			}
		}
		$competition->logo = $all['logo'];
		$competition->age_group = implode(',',$all['age_group']);
		$competition->limited = $all['limited'];
}
else
{
		$competition->tourname = $all['tourname'];
		$competition->date_from = $all['date_from'];
		$competition->date_to  = $all['date_to'];
		$competition->reg  = $all['region'];
		$competition->town  = $all['town'];
		$competition->adress = $all['address'];
		$competition->description = $all['description'];
		$competition->programm = $all['program'];
		$competition->contacts = $all['contacts'];
		$competition->age_group = implode(',',$all['age_group']);
		$competition->limited = $all['limited'];
}
$competition->save();
return redirect('/competition/'.$competition->id)->with('message','Тренування успішно відредаговано / Training successfully edit');
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
