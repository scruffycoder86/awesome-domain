<?php

use PHPUnit\Framework\TestCase;
use Awesome\Module\Domain\Http\Actions\PersonsAction;
use Awesome\Module\Domain\Http\Contracts\RoutingController;

class ControllerActionTest extends TestCase
{
    public function test_persons_action_class_exists()
    {
        self::assertTrue(class_exists(PersonsAction::class));
    }
    
    public function test_persons_action_object_is_a_routing_controller()
    {
        $personsAction = $this->getMockBuilder(PersonsAction::class)
        ->getMock();
        
        self::assertInstanceOf(RoutingController::class, $personsAction);
    }
}