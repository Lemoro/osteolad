<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $image = $this->faker->addImageFile();

        return [
            'title'       => $this->faker->titleRu(),
            'image'       => $image,
            'full_image'  => $image,
            'text'        => $this->faker->realText,
            'keyword'     => $this->faker->city(),
            'description' => $this->faker->realText,
            'publish'     => 1,
        ];
    }
}
