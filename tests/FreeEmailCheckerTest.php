<?php

use FreeEmailChecker\FreeEmailChecker;

class FreeEmailCheckerTest extends \PHPUnit_Framework_TestCase
{
    public function testIsGenericEmail()
    {
        $emailChecker = new FreeEmailChecker();
        $result = $emailChecker->check("testemail@gmail.com");

        $this->assertTrue($result);
    }

    public function testIsNotGenericEmail()
    {
        $emailChecker = new FreeEmailChecker();
        $result = $emailChecker->check("testemail@coffee.com");

        $this->assertFalse($result);
    }
}