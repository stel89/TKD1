<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sportsman extends Model
{
    protected $table="sportsmans";
	protected $fillable = ['name','surname','birthday', 'sex', 'rang', 'dan', 'trainer_one', 'participation', 'avatar', 'gold', 'silver', 'bronze', 'trainer_two', 'raiting'];
}
