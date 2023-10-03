<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sessaos', function (Blueprint $table) {
            $table->dateTime('horario');
            $table->date('dia');
            $table->primary(['horario', 'dia']);
            $table->integer('sala_numero');
            $table->bigInteger('filme_id');
            $table->foreign('sala_numero')->references('numero')->on('salas');
            $table->foreign('filme_id')->references('id')->on('filmes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessaos');
    }
};