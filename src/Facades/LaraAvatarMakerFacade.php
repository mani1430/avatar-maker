<?php

namespace Lara\LaraAvatarMaker;

use Illuminate\Support\Facades\Facade;

class LaraAvatarMakerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'lara-avatar-maker';
    }
}