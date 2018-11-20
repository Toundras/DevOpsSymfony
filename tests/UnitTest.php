<?php

use PHPUnit\Framework\TestCase;
use App\Entity\User;

class UnitTest extends TestCase
{
  public function testSetHelloWorld_validValue_successful()
  {
      $user = new User;
      $HelloWorldPage = 'Hello World';
      $user->setHelloWorldPage($HelloWorldPage);
      $this->assertEquals($HelloWorldPage, $user->getHelloWorldPage());
  }
}