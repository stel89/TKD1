<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sportsmans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up()
    {
        Schema::create('sportsmans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
			$table->string('surname');
			$table->string('birthday');
			$table->string('sex');
			$table->string('rang');
			$table->string('dan');
			$table->string('trainer_one');
			$table->string('trainer_two')->default('');
			$table->string('avatar');
			$table->text('gold');
			$table->text('silver');
			$table->text('bronze');
			$table->int('raiting');
			$table->text('participation');
            $table->rememberToken();
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
      Schema::drop('sportsmans');  
    }
}
