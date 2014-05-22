<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email')->unique();
			$table->string('password');
			$table->string('first_name');
			$table->string('last_name');
			$table->date('date_of_birth');
			$table->string('phone_number');
			$table->string('street_address');
			$table->string('province');
			$table->string('country');
			$table->string('postal_code');
			$table->boolean('is_admin')->default(0);

			$table->string('remember_token')->nullable();
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