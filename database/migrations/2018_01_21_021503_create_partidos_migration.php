<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartidosMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Partidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('golesLocal');
            $table->integer('golesVisitante');
            $table->date('fecha');
            $table->integer('localId');
            $table->integer('visitanteId');
            $table->softDeletes();
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
        Schema::dropIfExists('Partidos');
    }
}
