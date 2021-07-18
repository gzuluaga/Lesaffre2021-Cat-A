<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('respuestas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('formulario_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('pregunta_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('opciones_preguntas')->constrained('opciones', 'preguntas')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('puntuacion');
            $table->boolean('estado')->default(true);
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
        Schema::dropIfExists('respuestas');
    }
}
