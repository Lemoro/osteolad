<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ResponseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'    => $this->faker->name(),
            'photo'   => $this->faker->addImageFile(),
            'text'    => $this->faker->realText,
            'publish' => 1,

        ];
    }
}
