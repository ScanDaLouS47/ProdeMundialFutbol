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
        Schema::create('detalle_prodes', function (Blueprint $table) {
            $table->id();
            $table->integer('puntos');
            $table->integer('id_prode');
            $table->integer('id_partido');
            $table->integer('id_resultado');
            $table->integer('id_prode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_prodes');
    }
};
