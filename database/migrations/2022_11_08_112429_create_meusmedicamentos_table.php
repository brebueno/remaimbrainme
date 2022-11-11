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
        Schema::create('meusmedicamentos', function (Blueprint $table) {
            $table->id();
            $table->text('nome');
            $table->float('Dosagem_diaria');
            $table->date('Duração_do_tratamento');
            $table->dateTime('horarios');
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
        Schema::dropIfExists('meusmedicamentos');
    }
};
