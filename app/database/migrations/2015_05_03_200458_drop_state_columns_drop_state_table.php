<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropStateColumnsDropStateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('venues', function($table)
		{
			$table->dropForeign('venues_state_id_foreign');
			$table->dropColumn('state_id');
		});
		Schema::table('profiles', function($table)
		{
			$table->dropForeign('profiles_state_id_foreign');
			$table->dropColumn('state_id');
		});
		Schema::drop('states');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::create('states', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 20);
			$table->char('code', 2)->unique();
			$table->timestamps();
		});	
		Schema::table('profiles', function(Blueprint $table)
		{
			$table->integer('state_id')->unsigned;
			$table->foreign('state_id')->references('id')->on('states')->onUpdate('cascade')->onDelete('cascade');
		});
		Schema::table('venues', function(Blueprint $table)
		{
			$table->integer('state_id')->unsigned;
			$table->foreign('state_id')->references('id')->on('states')->onUpdate('cascade')->onDelete('cascade');
		});
	}

}
