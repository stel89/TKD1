<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $table="competition";
	protected $fillable = ['tourname', 'date_from', 'date_to', 'country', 'reg', 'town', 'adress', 'description', 'programm', 'contacts', 'logo', 'age_group', 'tournament_level', 'code', 'court_count', 'limited', 'pass', 'creator', 'type', 'judge_id', 'trainer_id', 'sportsman_id','judge_password', 'results', 'gold', 'silver', 'bronze'];

}
