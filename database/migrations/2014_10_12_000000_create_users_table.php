<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
			$table->string('role');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('passw');
			$table->string('surname');
			$table->string('patronymic');
			$table->string('country');
			$table->string('region');
			$table->string('town');
			$table->string('org')->default(Null);
			$table->string('sex');
			$table->string('fst')->default(Null);
			$table->string('cat')->default(Null);
			$table->string('avatar');	
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
        Schema::drop('users');
    }
}
