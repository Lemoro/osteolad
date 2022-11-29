<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class MyImageFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'myimage';
    }
}
