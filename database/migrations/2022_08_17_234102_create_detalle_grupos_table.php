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
            $table->integer('puntos');
            $table->integer('id_equipo_1');
            $table->integer('id_equipo_2');
            $table->integer('id_usuario');
            $table->integer('id_grupo');
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
