<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

class AboutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'keywords' => $this->faker->titleRu(),
            'description' => $this->faker->realText,
            'about_text' => $this->faker->realText,
            'signature'  => $this->faker->titleRu(),
            // 'about_img'  => 'required|file',
        ];
    }
}
