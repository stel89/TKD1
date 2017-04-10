<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Goods extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('goods', function (Blueprint $table) {
		$table->increments('id');
		$table->timestamps();
		$table->string('title');
		$table->text('description');
		$table->string('picture');
		$table->string('cost');
			 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
