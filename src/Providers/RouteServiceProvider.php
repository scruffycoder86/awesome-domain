<?php

namespace Awesome\Module\Domain\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * RouteServiceProvider
 * 
 * @author luyandasiko
 *
 */
class RouteServiceProvider extends ServiceProvider
{
    /** [@inheritdoc] */
    public function boot()
    {
        $this->app->router->group([ 'prefix' => 'v1/api' ], function(){
            require __DIR__ . '/../../resources/routes.php';
        });
    }
    
    /** [@inheritdoc] */
    public function register(){}
}