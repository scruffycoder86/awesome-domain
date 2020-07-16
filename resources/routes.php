<?php

/**
 * This module's Domain with accessible Http-Based Service endpoints 
 */

$router->group([ 'namespace' => 'Awesome\Module\Domain' ], function() use($router){
    $router->get('/people', 'Http\Action\PersonsAction@index');
});
