<?php

namespace App\Providers;

use App\Library\Faker\CityFakerUa;
use App\Library\Faker\ImageFakerAdd;
use App\Library\Faker\TitleFakerRu;
use Faker\Generator;
use Illuminate\Support\ServiceProvider;

class FakerSeviceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->extend(Generator::class, function (Generator $faker, $app) {
            $faker->addProvider(new CityFakerUa($faker));
            $faker->addProvider(new TitleFakerRu($faker));
            $faker->addProvider(new ImageFakerAdd($faker));

            return $faker;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
