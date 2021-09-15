<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestaDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('respuesta_detalles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('formulario_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('pregunta_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('opciones_preguntas_id')->constrained('opciones_preguntas')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('criterio')->nullable();
            $table->boolean('estado')->default(true);
            $table->longText('respuestaCorrecta');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuesta_detalles');
    }
}
