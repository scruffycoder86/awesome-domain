<?php

namespace Awesome\Module\Domain\Providers;

use Laravel\Lumen\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Awesome\Module\Domain\Http\Actions\PersonsAction;

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
        $this->app->make(PersonsAction::class);
        
        require __DIR__ . '/../../resources/routes.php';
    }
    
    /** [@inheritdoc] */
    public function register(){}
}