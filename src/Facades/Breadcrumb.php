<?php

namespace GuillaumePeres\Breadcrumb\Facades;

use Illuminate\Support\Facades\Facade;

class Breadcrumb extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'breadcrumb';
    }
}
