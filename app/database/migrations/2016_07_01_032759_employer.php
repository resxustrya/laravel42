<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Employer extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('employer', function($table){
               $table->increments('empid');
               $table->string('email',200);
               $table->string('password',200);
               $table->string('name',200);
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
            Schema::drop('employer');
	}

}
