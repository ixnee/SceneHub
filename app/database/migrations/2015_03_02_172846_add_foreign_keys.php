<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeys extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('profiles', function($table)
		{
			$table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('role_id')->references('id')->on('roles')->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('city_id')->references('id')->on('cities')->onUpdate('cascade')->onDelete('restrict');
		});

		Schema::table('venues', function($table)
		{
			$table->foreign('city_id')->references('id')->on('cities')->onUpdate('cascade')->onDelete('restrict');
		});

		Schema::table('events', function($table)
		{
			$table->foreign('venue_id')->references('id')->on('venues')->onUpdate('cascade')->onDelete('restrict');
		});
}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('profiles', function($table)
		{
			$table->dropForeign('profiles_user_id_foreign');
			$table->dropForeign('profiles_role_id_foreign');
			$table->dropForeign('profiles_city_id_foreign');
		});
		Schema::table('venues', function($table)
		{
			$table->dropForeign('venues_city_id_foreign');
		});
		Schema::table('events', function($table)
		{
			$table->dropForeign('events_venue_id_foreign');
		});
	}
}
