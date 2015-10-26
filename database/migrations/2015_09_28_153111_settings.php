<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Settings extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('settings', function(Blueprint $table)
		{
			$table->string('title');
			$table->text('description');
			$table->text('meta_description');
			$table->string('email');
			$table->integer('status');
			$table->text('status_msg');
			$table->string('copy');
			$table->string('facebook');
			$table->string('google');
			$table->string('twitter');
			$table->string('youtube');
			$table->string('instegram');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('settings');
	}

}
