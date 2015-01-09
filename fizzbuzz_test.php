<?php

require_once 'fizzbuzz.php';

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    public function testPhpUnit()
    {
        $this->assertTrue(TRUE);
    }

    public function testNumber()
    {
        $fb = new FizzBuzz;
        $this->assertEquals(0, $fb->checkValue(0));
        $this->assertEquals(1, $fb->checkValue(1));
    }
}
