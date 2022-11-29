<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'phones'  => '(222) 333-22-22',
            'email'   => 'katia@mail.m',
            'address' => 'Воронеж, ул. Радости, дом 777',
            'about_site'  => $this->faker->realText,
        ];
    }
}
