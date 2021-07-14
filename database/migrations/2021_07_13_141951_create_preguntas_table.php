<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('preguntas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('formularios_id')->constrained('formularios')->cascadeOnDelete()->cascadeOnUpdate();
            $table->longText('pregunta');
            $table->string('archivo', 150);
            $table->string('calificacion');
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
        Schema::dropIfExists('preguntas');
    }
}
