<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipio extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
<<<<<<< HEAD
		//Migracion Para la Creacion de la Tabla municipio

        DB::statement('CREATE TABLE IF NOT EXISTS redbpim.municipio (
=======
		//Migracion Para la Creacion de la Tabla Municipio
            DB::statement('CREATE TABLE IF NOT EXISTS redbpim.municipio (
>>>>>>> parent of c30e702... tip_secretaria
                id INT NOT NULL AUTO_INCREMENT,
                cod_dane_mun INT NOT NULL,
                nom_municipio VARCHAR(100),
                id_departamento INT NOT NULL,
                PRIMARY KEY (id),
                CONSTRAINT fk_municipio_dep
                FOREIGN KEY (id_departamento)
                REFERENCES RedBpim.departamento (id)
                ON DELETE RESTRICT
                ON UPDATE CASCADE)
                ENGINE = InnoDB');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//Se Elimina la Tabla en Caso de Requerirse así
        DB::statement('DROP TABLES redbpim.municipio') ;

	}

}