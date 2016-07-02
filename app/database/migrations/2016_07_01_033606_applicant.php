<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Applicant extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('applicant', function($table){
               $table->increments('appid');
               $table->string('email',200);
               $table->string('password',200);
               $table->string('name', 200);
               $table->softDeletes();
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
            Schema::drop('applicant');
	}

}
