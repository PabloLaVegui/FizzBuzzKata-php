<?php

class FizzBuzz
{
    public function __construct()
    {
    }

    public function checkValue($n)
    {
        if ($n % 3 == 0 && $n != 0) {
            return 'Fizz';
        } else if ($n % 5 == 0 && $n != 0) {
            return 'Buzz';
        } else {
            return $n;
        }
    }
}
