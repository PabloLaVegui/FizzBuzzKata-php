<?php

require_once 'fizzbuzz.php';

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    protected $fb;

    protected function setUp()
    {
        $this->fb = new FizzBuzz;
    }


    public function testPhpUnit()
    {
        $this->assertTrue(TRUE);
    }

    public function testNumber()
    {
        $this->assertEquals(0, $this->fb->checkValue(0));
        $this->assertEquals(1, $this->fb->checkValue(1));
    }

    public function testMultipleOfThree()
    {
        $this->assertEquals('Fizz', $this->fb->checkValue(3));
        $this->assertEquals('Fizz', $this->fb->checkValue(6));
    }
}
