<?php

class FizzBuzz
{
    public function __construct()
    {
    }

    public function checkValue($n)
    {
        $value = '';

        if ($n == 0) {
            return 0;
        } else {
            if ($n % 3 == 0) {
                $value = $value.'Fizz';
            }
            if ($n % 5 == 0) {
                $value = $value.'Buzz';
            }
            if ($value == '') {
                return $n;
            }
        }

        return $value;
    }
}
