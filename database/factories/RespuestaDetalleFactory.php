<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Formulario;
use App\Models\OpcionesPreguntas;
use App\Models\Pregunta;
use App\Models\RespuestaDetalle;
use App\Models\User;

class RespuestaDetalleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RespuestaDetalle::class;

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
            'opciones_preguntas_id' => OpcionesPreguntas::factory(),
            'criterio' => $this->faker->word,
            'estado' => $this->faker->boolean,
        ];
    }
}
