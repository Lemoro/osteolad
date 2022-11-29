<?php

namespace App\Providers;

use App\Services\MyImageService;
use Illuminate\Support\ServiceProvider;

class MyImageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->bind('myimage', MyImageLibService::class);
        $this->app->bind('myimage', function () {
            return new MyImageService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->app->bind('myimage', MyImageLibService::class);
    }
}
