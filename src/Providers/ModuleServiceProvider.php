<?php

namespace Awesome\Module\Domain\Providers;

use Laravel\Lumen\Routing\Router;
use Illuminate\Support\ServiceProvider;

/**
 * ModuleServiceProvider
 * 
 * @author luyandasiko
 *
 */
class ModuleServiceProvider extends ServiceProvider
{   
    /** [@inheritdoc] */
    public function boot(Router $router)
    {
        (function() use($router){
            require __DIR__ . '/../../resources/routes.php';
        })();
    }
    
    /** [@inheritdoc] */
    public function register(){}
}