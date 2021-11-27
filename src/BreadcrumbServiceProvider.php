<?php

namespace GuillaumePeres\Breadcrumb;

use Illuminate\Support\ServiceProvider;

class BreadcrumbServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->registerBreadcrumbClass();
    }

    private function registerBreadcrumbClass()
    {
        $this->app->singleton('breadcrumb', function($app) {
            return new Breadcrumb();
        });
    }

    public function provides()
    {
        return array(
            'breadcrumb'
        );
    }
}
