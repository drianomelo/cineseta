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
            $table->id();
            $table->string('horario');
            $table->date('dia');
            $table->integer('sala_id');
            $table->integer('filme_id');
            $table->foreign('sala_id')->references('sala_id')->on('salas');
            $table->foreign('filme_id')->references('filme_id')->on('filmes');
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
