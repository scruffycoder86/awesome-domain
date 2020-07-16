<?php

use Lumen\Testbench\TestCase;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

/**
 * PersonsActionTest
 * 
 * @author luyandasiko
 *
 */
class PersonsActionTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_persons_http_service_status_code_asserts_to_200()
    {   
        $this->get('http:://localhost/v1/api/people', [ 'Accept' => 'application/json' ])->assertSuccessful();
    }
}