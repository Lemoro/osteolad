<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $image = $this->faker->addImageFile('massage');
        return [

            'title'       => $this->faker->titleRu(),
            'direction'   => 'Биодинамика',
            'image'       => $image,
            'full_image'  => $image,
            'text'        => $this->faker->realText,
            'keyword'     => $this->faker->city(),
            'description' => $this->faker->realText,
            'publish'     => 1,
        ];
    }
}
