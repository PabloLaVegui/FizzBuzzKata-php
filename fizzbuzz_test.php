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

    public function testMultipleOfFive()
    {
        $this->assertEquals('Buzz', $this->fb->checkValue(5));
        $this->assertEquals('Buzz', $this->fb->checkValue(10));
    }

    public function testMultipleOfThreeAndFive()
    {
        $this->assertEquals('FizzBuzz', $this->fb->checkValue(15));
    }
}
