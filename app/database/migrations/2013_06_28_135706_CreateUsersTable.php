<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('core_users', function($table)
		{
			$table->increments('id');

			$table->integer('id_asignacion');
			$table->integer('id_perfil');
			$table->integer('id_auth');
			
			$table->string('name');
			$table->string('email');
			$table->string('password');
			$table->string('direccion')->nullable();
			$table->integer('telefono')->nullable();
			$table->integer('movil')->nullable();
			$table->string('foto')->nullable();

			$table->boolean('activar')->default(0); // 0 = No Activado, 1 = Activado
			$table->boolean('bloquear')->default(0); // 0 = No bloqueado, 1 = Bloqueado

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
		Schema::drop('core_users');
	}

}