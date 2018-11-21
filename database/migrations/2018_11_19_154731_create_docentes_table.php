<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatedocentesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email');
            $table->string('telefono');
            $table->integer('profesion_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('profesion_id')->references('id')->on('profesions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('docentes');
    }
}
