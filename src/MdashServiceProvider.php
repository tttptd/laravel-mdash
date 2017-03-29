<?php

namespace Tttptd\Mdash;

use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Support\ServiceProvider;

class MdashServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../resources/config/mdash.php' => config_path('mdash.php')
        ], 'config');
    }

    public function register()
    {
        $this->app->bind('Mdash', function($app) {
            return new Mdash();
        });
    }

    public function provides()
    {
        return [
            'Mdash',
        ];
    }

}
