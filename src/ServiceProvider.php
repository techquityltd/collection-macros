<?php

namespace Techquity\CollectionMacros;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        Collection::mixin(new Macros);
    }
}
