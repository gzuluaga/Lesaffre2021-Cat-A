<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\calendars;

class CalendarsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Calendars::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4),
            'start' => $this->faker->date(),
            'icono' => $this->faker->word,
            'enlace' => $this->faker->text,
            'end' => $this->faker->date(),
            'notas' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'allDay' => $this->faker->boolean,
        ];
    }
}
