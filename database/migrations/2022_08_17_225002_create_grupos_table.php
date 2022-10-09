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
        Schema::create('grupos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_primer_puesto')->nullable();
            $table->unsignedBigInteger('id_segundo_puesto')->nullable();

            $table->foreign('id_primer_puesto')
                    ->references('id')->on('equipos')
                    ->onDelete('set null');

            $table->foreign('id_segundo_puesto')
                    ->references('id')->on('equipos')
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
        Schema::dropIfExists('grupos');
    }
};
