<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{


Schema::create('users', function ($table) {
  // auto incremental id (PK)
  $table->increments('id');

  // varchar 32
  $table->string('username', 100);
  $table->string('password', 100);
  $table->string('remember_token',255);


  // int
//  $table->integer('role');

  // boolean
//  $table->boolean('active');

  // created_at | updated_at DATETIME
  $table->timestamps();
});
		//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//

Schema::drop('users');
	}

}
