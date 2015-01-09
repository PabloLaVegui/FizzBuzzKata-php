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
        } else {
            return $n;
        }
    }
}
