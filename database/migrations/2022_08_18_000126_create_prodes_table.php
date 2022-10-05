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
        Schema::create('prodes', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_carga')->nullable(false);
            $table->date('fecha_aprovacion')->nullable();
            $table->integer('estado');
            $table->unsignedBigInteger('id_usuario')->nullable();

            $table->foreign('id_usuario')
                    ->references('id')->on('usuarios')
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
        Schema::dropIfExists('prodes');
    }
};
