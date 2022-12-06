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
            $table->unsignedBigInteger('id_prode')->nullable();            
            $table->unsignedBigInteger('id_resultado')->nullable();            

            $table->foreign('id_prode')
                    ->references('id')->on('prodes')
                    ->onDelete('set null');

            $table->foreign('id_resultado')
                    ->references('id')->on('resultados')
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
        Schema::dropIfExists('detalle_prodes');
    }
};
