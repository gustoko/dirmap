<?php

use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('addresses',function($table)
		{
			$table->increments('id');

			$table->integer('id_grupo');
			$table->integer('id_usuario');
			$table->integer('id_comuna');
			$table->integer('id_provincia');
			$table->integer('id_region');


			$table->string('name');
			$table->string('direccion');
			$table->string('telefono');
			$table->string('movil')->nullable();
			$table->string('nacionalidad');
			$table->text('observacion')->nullable();

			$table->string('foto')->nullable();
			$table->string('mapa')->nullable();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('addresses');
	}

}