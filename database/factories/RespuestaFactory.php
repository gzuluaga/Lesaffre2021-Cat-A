<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Formulario;
use App\Models\OpcionesPreguntas;
use App\Models\Pregunta;
use App\Models\Respuesta;
use App\Models\User;

class RespuestaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Respuesta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'formulario_id' => Formulario::factory(),
            'pregunta_id' => Pregunta::factory(),
            'opciones_preguntas' => OpcionesPreguntas::factory(),
            'puntuacion' => $this->faker->word,
            'estado' => $this->faker->boolean,
        ];
    }
}
