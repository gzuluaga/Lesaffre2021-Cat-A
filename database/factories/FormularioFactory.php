<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Formulario;

class FormularioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Formulario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descripcion' => $this->faker->text,
            'formtrivia' => $this->faker->word,
            'fecha_star' => $this->faker->date(),
            'fecha_end' => $this->faker->date(),
            'estado' => $this->faker->boolean,
        ];
    }
}
