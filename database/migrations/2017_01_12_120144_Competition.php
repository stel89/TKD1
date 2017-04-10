<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Competition extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competition', function (Blueprint $table) {
            $table->increments('id');
			$table->string('type');
			$table->string('tourname');
            $table->string('date_from');
			$table->string('date_to');
			$table->string('country');
			$table->string('reg');
			$table->string('town');
			$table->string('adress');
			$table->text('description');
			$table->text('programm');
			$table->text('contacts');
            $table->string('logo');
			$table->string('age_group');
			$table->string('tournament_level');
			$table->string('code');
			$table->string('court_count');
			$table->string('limited');
			$table->string('pass');
			$table->string('judge_id');
			$table->string('trainer_id');
			$table->string('sportsman_id');
			$table->string('judge_password');
			$table->string('creator');
			$table->text('results');
			$table->text('gold');
			$table->text('silver');
			$table->text('bronze');
            $table->timestamps();
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
