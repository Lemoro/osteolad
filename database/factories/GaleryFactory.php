<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GaleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $image =  $this->faker->addImageFile();

        return [
            "image"   => $image,
            'full_image'  => $image,
            "title"   => $this->faker->myCityUa,
            "orderby" => "1",
        ];
    }
}
