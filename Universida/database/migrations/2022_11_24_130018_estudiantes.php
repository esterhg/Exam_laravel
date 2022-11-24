<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Estudiantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->varchar('Nombres');
            $table->varchar('Apellidos');
            $table->varchar('Fecha_Nacimiento');
            $table->varchar('id_carrera');
            $table->varchar('Sexo');
            $table->varchar('estado_civil');
            $table->varchar('Status');
            $table->varchar('id_campus');
            $table->varchar('id_pais');
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
        //
    }
}
