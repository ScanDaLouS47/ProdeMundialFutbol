<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('hora');
            $table->unsignedBigInteger('id_equipo_1')->nullable();
            $table->unsignedBigInteger('id_equipo_2')->nullable();
            $table->unsignedBigInteger('id_estadio')->nullable();

            $table->foreign('id_equipo_1')
                    ->references('id')->on('equipos')
                    ->onDelete('set null');

            $table->foreign('id_equipo_2')
                    ->references('id')->on('equipos')
                    ->onDelete('set null');

            $table->foreign('id_estadio')
                    ->references('id')->on('estadios')
                    ->onDelete('set null');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partidos');
    }
};
