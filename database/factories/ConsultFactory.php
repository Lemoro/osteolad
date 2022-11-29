<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ConsultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'        => $this->faker->word(10),
            'question'    => $this->faker->realText,
            'answer'      => $this->faker->realText,
            'publish'     => 1,
            'keyword'     => $this->faker->myCityUa(),
            'description' => $this->faker->realText,
        ];
    }
}
