<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CertificateFactory extends Factory
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
            "image" => $image,
            "full_image" => $image,
            "title" => $this->faker->word(),
            "orderby" => "1",
        ];
    }
}
