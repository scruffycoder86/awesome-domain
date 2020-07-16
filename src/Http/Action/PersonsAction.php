<?php

namespace Awesome\Module\Domain\Http\Action;

use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * PersonsAction
 * 
 * @author luyandasiko
 *
 */
class PersonsAction extends ControllerAction
{
    /**
     * Returns a list of Affiliates at Digital Closuxe
     *  
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index()
    {
        return new JsonResponse([ 'affiliates' => 
            [
                [
                    'name' => 'Luyanda',
                    'surname' => 'Siko',
                    'email' => 'luyandasiko@example.com'
                ],
                [
                    'name' => 'Lonwabo',
                    'surname' => 'Mcakatsha',
                    'email' => 'lonwabomcakatsha@example.com'
                ]
            ]
        ]);
    }
}
