<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $table="goods";
	protected $fillable = ['title', 'description', 'cost', 'picture'];
}
