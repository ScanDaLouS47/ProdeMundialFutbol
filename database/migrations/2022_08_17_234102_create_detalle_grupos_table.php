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
        Schema::create('detalle_grupos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('puntos')->nullable();
            $table->unsignedBigInteger('id_equipo_1')->nullable();
            $table->unsignedBigInteger('id_equipo_2')->nullable();
            $table->unsignedBigInteger('id_usuario')->nullable();
            $table->unsignedBigInteger('id_grupo')->nullable();

            $table->foreign('id_equipo_1')
                    ->references('id')->on('equipos')
                    ->onDelete('set null');

            $table->foreign('id_equipo_2')
                    ->references('id')->on('equipos')
                    ->onDelete('set null');

            $table->foreign('id_usuario')
                    ->references('id')->on('users')
                    ->onDelete('set null');

            $table->foreign('id_grupo')
                    ->references('id')->on('grupos')
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
        Schema::dropIfExists('detalle_grupos');
    }
};
