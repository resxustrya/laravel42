<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Admin extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
             Schema::create('admin', function($table){
               $table->increments('adminid');
               $table->string('email',200);
               $table->string('password',200);
               $table->string('role',200);
               $table->timestamps();
               $table->softDeletes();
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
            Schema::drop('admin');
	}

}
