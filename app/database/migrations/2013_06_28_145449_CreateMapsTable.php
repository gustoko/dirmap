<?php

use Illuminate\Database\Migrations\Migration;

class CreateMapsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('maps',function($table)
		{
			$table->increments('id');

			$table->integer('id_grupo');
			$table->integer('id_comuna');
			$table->integer('id_provincia');
			$table->integer('id_region');


			$table->string('link');
			$table->text('descripcion')->nullable();
			$table->text('observacion')->nullable();

			//$table->string('foto')->nullable();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('maps');
	}

}