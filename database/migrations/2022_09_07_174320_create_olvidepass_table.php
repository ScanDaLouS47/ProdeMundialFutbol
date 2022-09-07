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
        Schema::create('olvidepass', function (Blueprint $table) {
            $table->id();
            $table->integer('codigo')->nullable(false);
            $table->unsignedBigInteger('id_usuario')->nullable();                        
            $table->string('password')->nullable(false);
            $table->string('estado');
            $table->timestamps();

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
        Schema::dropIfExists('olvidepass');
    }
};
