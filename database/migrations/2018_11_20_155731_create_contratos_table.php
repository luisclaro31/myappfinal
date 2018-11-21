<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatecontratosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numerocontrato');
            $table->string('horascontratada');
            $table->date('fechainicio');
            $table->date('fechafin');
            $table->integer('docente_id')->unsigned();
            $table->integer('tipocontrato_id')->unsigned();
            $table->integer('jornadas_id')->unsigned();
            $table->integer('asignaturas_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('docente_id')->references('id')->on('docentes');
            $table->foreign('tipocontrato_id')->references('id')->on('tipocontratos');
            $table->foreign('jornadas_id')->references('id')->on('jornadas');
            $table->foreign('asignaturas_id')->references('id')->on('asignaturas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contratos');
    }
}
