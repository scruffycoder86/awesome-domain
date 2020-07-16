<?php

$router->group([ 'prefix' => '/v1/api', 'namespace' => 'Awesome\Module\Domain\Http\Actions' ], function () use ($router) {
    $router->get('/people',  ['uses' => 'PersonsAction@index']);
});