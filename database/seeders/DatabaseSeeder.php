<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Certificate::factory(10)->create();
        \App\Models\Blog::factory(50)->create();
        \App\Models\Activity::factory(50)->create();
        \App\Models\Galery::factory(50)->create();
        \App\Models\Consult::factory(50)->create();
        \App\Models\Response::factory(50)->create();
        \App\Models\Appointment::factory(50)->create();
        \App\Models\User::factory(1)->create();

    }
}
